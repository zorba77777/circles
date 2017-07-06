<?php
/**
 * @var object $settings
 */
?>

<div style="text-align: center">
    <h3>Настройки</h3>
    <form method="post">
        <div class="col-md-6">
            <label style="font-weight: normal">Координата X первого круга
                <br/>
                <input type="number" min="10" max="500" style="text-align: center"
                       value="<?= $settings->firstCircle->center->oX ?>" name="firstOx">
            </label>
            <br/>

            <label style="font-weight: normal">Координата Y первого круга
                <br/>
                <input type="number" min="10" max="500" style="text-align: center"
                       value="<?= $settings->firstCircle->center->oY ?>" name="firstOy">
            </label>
            <br/>

            <label style="font-weight: normal">Радиус первого круга
                <br/>
                <input type="number" min="10" max="500" style="text-align: center"
                       value="<?= $settings->firstCircle->radius ?>" name="firstRadius">
            </label>
            <br/>

            <label style="font-weight: normal">Первоначальный цвет первого круга
                <br/>
                <select name="firstInitialColor">
                    <option value="red">Красный</option>
                    <option value="green">Зеленый</option>
                    <option value="blue">Голубой</option>
                    <option value="black">Черный</option>
                </select>
            </label>
            <br/>

            <label style="font-weight: normal">Цвет первого круга после щелчка
                <br/>
                <select name="firstColorOnClick">
                    <option value="red">Красный</option>
                    <option value="green">Зеленый</option>
                    <option value="blue">Голубой</option>
                    <option value="black">Черный</option>
                </select>
            </label>
            <br/>

            <label style="font-weight: normal">Сообщение, выводящееся по щелчку по первому кругу
                <br/>
                <input type="text" style="text-align: center" value="<?= $settings->firstCircle->message ?>"
                       name="firstMessage">
            </label>
            <br/><br/>
        </div>

        <div class="col-md-6">
            <label style="font-weight: normal">Координата X второго круга
                <br/>
                <input type="number" min="10" max="500" style="text-align: center"
                       value="<?= $settings->secondCircle->center->oX ?>" name="secondOx">
            </label>
            <br/>

            <label style="font-weight: normal">Координата Y второго круга
                <br/>
                <input type="number" min="10" max="500" style="text-align: center"
                       value="<?= $settings->secondCircle->center->oY ?>" name="secondOy">
            </label>
            <br/>

            <label style="font-weight: normal">Радиус второго круга
                <br/>
                <input type="number" min="10" max="500" style="text-align: center"
                       value="<?= $settings->secondCircle->radius ?>" name="secondRadius">
            </label>
            <br/>

            <label style="font-weight: normal">Первоначальный цвет второго круга
                <br/>
                <select name="secondInitialColor">
                    <option value="red">Красный</option>
                    <option value="green">Зеленый</option>
                    <option value="blue">Голубой</option>
                    <option value="black">Черный</option>
                </select>
            </label>
            <br/>

            <label style="font-weight: normal">Цвет второго круга после щелчка
                <br/>
                <select name="secondColorOnClick">
                    <option value="red">Красный</option>
                    <option value="green">Зеленый</option>
                    <option value="blue">Голубой</option>
                    <option value="black">Черный</option>
                </select>
            </label>
            <br/>

            <label style="font-weight: normal">Сообщение, выводящееся по щелчку по второму кругу
                <br/>
                <input type="text" style="text-align: center" value="<?= $settings->secondCircle->message ?>"
                       name="secondMessage">
            </label>
            <br/>
        </div>
        <div class="col-md-12">
            <input type="submit" value="Сохранить изменения" name="submit" class="btn-default">
        </div>
    </form>
</div>