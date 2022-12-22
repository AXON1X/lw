<!DOCTYPE html>
<form action="" method="POST" class="form-example">
    <div class="form-group">
        <label for="name">expression: </label>
        <input type="text" name="a" id="name" class="form-control">
        <div>
            <input type="submit" value="ThisIsDuck" class="btn btn-primary">
        </div>
        <div>
            <?php if (!empty($_POST['a'])) : ?>
                <div>
                    <?php $total = substr($_POST['a'], 0, 1);
                    for ($i = 1; $i <= strlen($_POST['a']) - 1; $i++) {
                            if ($_POST['a'][$i] === "+" && ($i === 2 || $i === 6 || $i === 10 || $i === 14)) {
                                $total = $total + $_POST['a'][$i + 2];
                            }
                            if ($_POST['a'][$i] === "/" && ($i === 2 || $i === 6 || $i === 10 || $i === 14)) {
                                if ((int)$_POST['a'][$i + 2] !== 0) {
                                    $total = $total / $_POST['a'][$i + 2];
                                } else {
                                    echo ("Ошибка, деление на ноль");
                                    break;
                                }
                            }
                            if ($_POST['a'][$i] === "*" && ($i === 2 || $i === 6 || $i === 10 || $i === 14)) {
                                $total = $total * $_POST['a'][$i + 2];
                            }
                            if ($_POST['a'][$i] === "-" && ($i === 2 || $i === 6 || $i === 10 || $i === 14)) {
                                $total = $total - $_POST['a'][$i + 2];
                            }
                            if ($_POST['a'][$i] === "^" && ($i === 2 || $i === 6 || $i === 10 || $i === 14)) {
                                $total = $total ** $_POST['a'][$i + 2];
                            }
                        }
                    Результат: echo ($total); ?>
                </div>
            <?php endif; ?>
</form>