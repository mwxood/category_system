<?php include('includes/head.php'); ?>
   
    <main>
        <div class="content-holder">
            <?php include('includes/navigation.php') ?>
            <div class="content">
               <?php include('includes/header.php') ?>

                <div class="main-content">
                  <h1>Dashboard</h1>
                    <ul class="category-group">
                        <li>
                            <a href="#">
                                <span class="material-icons">person</span>
                                <span class="category-title">Пациенти</span>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <span class="material-icons">app_registration</span>
                                <span class="category-title">Регистрация на пациент</span>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <span class="material-icons">medication</span>
                                <span class="category-title">Лекари</span>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <span class="material-icons">date_range</span>
                                <span class="category-title">График на лекарите</span>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <span class="material-icons">table_rows</span>
                                <span class="category-title">Отчет на регистрираните пациентите</span>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <span class="material-icons">settings</span>
                                <span class="category-title">Настройки</span>
                            </a>
                        </li>

                    </ul><!--end category-group-->

                    <table class="table mb-5">
                        <thead>
                            <tr>
                                <td>Име</td>
                                <td>Фамилия</td>
                                <td>Телефон</td>
                                <td>Имейл</td>
                                <td>Тип преглед</td>
                            </tr>
                        </thead>
                        <tbody>
                        <tr>
                                <td><a href="#" class="btn btn-center btn-primary">delete</a></td>
                                <td><a href="#" class="btn btn-center btn-success"><span class="material-icons">check_circle</span>delete</a></td>
                                <td><a href="#" class="btn btn-center btn-warning"><span class="material-icons">warning</span>delete</a></td>
                                <td><a href="#" class="btn btn-center btn-danger"><span class="material-icons">delete</span>delete</a></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>

                    <form action="#" class="mb-5">
                        <div class="form-group">
                            <label>
                                <span class="input-title">Text</span>
                                <input type="text" class="input-bg" placeholder="text">
                            </label>

                            <label>
                            <span class="input-title">Text</span>
                                <input type="text" class="input-bg" placeholder="text">
                            </label>
                        </div><!--end form-group-->
                        <span class="input-title">Text</span>
                        <textarea name="" id="" cols="30" rows="10" class="input-bg"></textarea>

                        <input type="submit" class="btn  btn-success" value="send">
                    </form>
                </div><!--end main-content-->
            </div><!--end content-->
        </div>
    </main>
<?php include('includes/footer.php') ?>