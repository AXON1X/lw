<!DOCTYPE html>
<form action="" method="POST" class="form-example">
    <div class="form-group">
        <label for="name">Value1: </label>
        <input type="text" name="a" id="name" class="form-control">
    </div>
    <div class="form-group">
        <label for="name">+ </label>
        <input type="radio" name="plus" id="plus" class="form-control">
        <label for="name">- </label>
        <input type="radio" name="minus" id="minus" class="form-control">
        <label for="name">* </label>
        <input type="radio" name="product" id="product" class="form-control">
        <label for="name">/ </label>
        <input type="radio" name="division" id="division" class="form-control">
    </div>
    <div class="form-group">
        <label for="name">Value2: </label>
        <input type="text" name="b" id="email" class="form-control">
    </div>
    <div>
        <input type="submit" value="ThisIsDuck" class="btn btn-primary">
    </div>
    <div>
        <?php if (!empty($_POST['a']) && !empty($_POST['b']) && !empty($_POST['plus'])) : ?>
            <div>
                Результат: <?php echo $_GET['a'] + $_GET['b'] ?>
            </div>
        <?php endif; ?>
    </div>
    <div>
        <?php if (!empty($_POST['a']) && !empty($_POST['b']) && !empty($_POST['minus'])) : ?>
            <div>
                Результат: <?php echo $_GET['a'] - $_GET['b'] ?>
            </div>
        <?php endif; ?>
    </div>
    <div>
        <?php if (!empty($_POST['a']) && !empty($_POST['b']) && !empty($_POST['product'])) : ?>
            <div>
                Результат: <?php echo $_GET['a'] * $_GET['b'] ?>
            </div>
        <?php endif; ?>
    </div>
    <div>
        <?php if (!empty($_POST['a']) && !empty($_POST['b']) && !empty($_POST['division'])) : ?>
            <div>
                Результат: <?php echo $_GET['a'] / $_GET['b'] ?>
            </div>
        <?php endif; ?>
    </div>
</form>