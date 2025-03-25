<?php
session_start();
include 'config.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION['user_id'];

// Handle adding to cart
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['add_to_cart'])) {
    $product_id = $_POST['product_id'];
    $quantity = $_POST['quantity'] ?? 1;

    $stmt = $conn->prepare("SELECT stock FROM products WHERE id = ?");
    $stmt->bind_param("i", $product_id);
    $stmt->execute();
    $stock = $stmt->get_result()->fetch_assoc()['stock'] ?? 0;

    if ($stock >= $quantity) {
        $stmt = $conn->prepare("INSERT INTO cart (user_id, product_id, quantity) 
                                VALUES (?, ?, ?) ON DUPLICATE KEY UPDATE quantity = quantity + ?");
        $stmt->bind_param("iiii", $user_id, $product_id, $quantity, $quantity);
        $stmt->execute();
        echo json_encode(['status' => 'success', 'message' => 'Added to cart!']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Not enough stock!']);
    }
    exit();
}

// Handle removing from cart
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['remove_from_cart'])) {
    $cart_id = $_POST['cart_id'];
    $stmt = $conn->prepare("DELETE FROM cart WHERE id = ? AND user_id = ?");
    $stmt->bind_param("ii", $cart_id, $user_id);
    $stmt->execute();
    echo json_encode(['status' => 'success', 'message' => 'Removed from cart!']);
    exit();
}

// Fetch cart items
$stmt = $conn->prepare("SELECT c.id AS cart_id, c.quantity, p.name, p.price 
                        FROM cart c JOIN products p ON c.product_id = p.id 
                        WHERE c.user_id = ?");
$stmt->bind_param("i", $user_id);
$stmt->execute();
$cart_items = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../frontend/css/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <div class="container mt-4">
        <h1>Shopping Cart</h1>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody id="cart-table">
                <?php foreach ($cart_items as $item): ?>
                <tr data-cart-id="<?php echo $item['cart_id']; ?>">
                    <td><?php echo htmlspecialchars($item['name']); ?></td>
                    <td><?php echo htmlspecialchars($item['price']); ?> VNĐ</td>
                    <td><?php echo htmlspecialchars($item['quantity']); ?></td>
                    <td><?php echo $item['quantity'] * $item['price']; ?> VNĐ</td>
                    <td><button class="btn btn-danger remove-item" data-cart-id="<?php echo $item['cart_id']; ?>">Remove</button></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <a href="checkout.php" class="btn btn-success">Proceed to Checkout</a>

        <!-- Add to Cart Form (for testing) -->
        <form id="add-to-cart-form" class="mt-4">
            <h2>Add to Cart</h2>
            <div class="mb-3">
                <label for="product_id">Product ID:</label>
                <input type="number" name="product_id" id="product_id" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="quantity">Quantity:</label>
                <input type="number" name="quantity" id="quantity" class="form-control" min="1" value="1" required>
            </div>
            <button type="submit" class="btn btn-primary">Add to Cart</button>
        </form>
    </div>

    <script>
    $(document).ready(function() {
        $('#add-to-cart-form').submit(function(e) {
            e.preventDefault();
            $.post('cart.php', $(this).serialize() + '&add_to_cart=1', function(response) {
                alert(response.message);
                if (response.status === 'success') location.reload();
            }, 'json');
        });

        $('.remove-item').click(function() {
            const cartId = $(this).data('cart-id');
            if (confirm('Remove this item from cart?')) {
                $.post('cart.php', { cart_id: cartId, remove_from_cart: 1 }, function(response) {
                    alert(response.message);
                    if (response.status === 'success') location.reload();
                }, 'json');
            }
        });
    });
    </script>
</body>
</html>