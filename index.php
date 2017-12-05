<?php
include('core/connexion.php');
 ?>


<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>todo_app</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <link rel="stylesheet" href="style.css">


</head>

<body>

  <!--Main-->

  <div class="main">

    <!--Main header start-->

    <div class="main-header">
      <div class="left"><h1>MY TODOLIST<img src="img/circle.png" alt=""></h1></div>
    </div>
    <!-- Main header end -->

    <!-- Main container start -->
    <div class="main-container">
      <div class="centered">
        <ul class="list" id="todo-list">

          <!--task-->
          <li class="list-item">
            <header class="item-header">
              <h2 class="item-title">Take a shower</h2>
              <ul class="menu">
                <li class="menu-item">Done</li>
                <li class="menu-item">Edit</li>
                <li class="menu-item">Delete</li>
              </ul>
            </header>
            <div class="item-container">Li Europan lingues es membres del sam familie. Lor separat existentie es un myth. Por scientie, musica, sport etc, litot Europa usa li sam vocabular.</div>
            <footer class="item-footer">
              <p class="task-description">My bus arrive at...Li Europan lingues es membres del sam familie.</p>
              <span>Started on:____</span>
              <span>End time:____</span>
            </footer>
          </li>
          <!--task-->
          <li class="list-item">
            <header class="item-header">
              <h2 class="item-title">Make my bag</h2>
              <ul class="menu">
                <li class="menu-item">Done</li>
                <li class="menu-item">Edit</li>
                <li class="menu-item">Delete</li>
              </ul>
            </header>
            <div class="item-container">Li Europan lingues es membres del sam familie. Lor separat existentie es un myth. Por scientie, musica, sport etc, litot Europa usa li sam vocabular.</div>
            <footer class="item-footer">
              <span>start activity</span>
              <span>end activity</span>
            </footer>
          </li>
          <!--task-->
          <li class="list-item">
            <header class="item-header">
              <h2 class="item-title">Cycling hell</h2>
              <ul class="menu">
                <li class="menu-item">Done</li>
                <li class="menu-item">Edit</li>
                <li class="menu-item">Delete</li>
              </ul>
            </header>
            <div class="item-container">Li Europan lingues es membres del sam familie. Lor separat existentie es un myth. Por scientie, musica, sport etc, litot Europa usa li sam vocabular.</div>
            <footer class="item-footer">
              <span>start activity</span>
              <span>end activity</span>
            </footer>
          </li>

          <!--task-->
          <li class="list-item">
            <header class="item-header">
              <h2 class="item-title">Cabrones a cascoporro</h2>
              <ul class="menu">
                <li class="menu-item">Done</li>
                <li class="menu-item">Edit</li>
                <li class="menu-item">Delete</li>
              </ul>
            </header>
            <div class="item-container">Li Europan lingues es membres del sam familie. Lor separat existentie es un myth. Por scientie, musica, sport etc, litot Europa usa li sam vocabular.</div>
            <footer class="item-footer">
              <span>start activity</span>
              <span>end activity</span>
            </footer>
          </li>
          <!--task-->
          <li class="list-item">
            <header class="item-header">
              <h2 class="item-title">My title</h2>
              <ul class="menu">
                <li class="menu-item">Done</li>
                <li class="menu-item">Edit</li>
                <li class="menu-item">Delete</li>
              </ul>
            </header>
            <div class="item-container">My description</div>
            <footer class="item-footer">
              <span>start activity</span>
              <span>end activity</span>
            </footer>
          </li>
        </ul>
      </div>
    </div>

    <!-- Main container ends -->

    <!-- Next container -->
    <div class="next-container">
      <div class="borrar" onclick="#">Clear</div>
      <ul class="add" id="addtask">
        <li class="list-item">
          <div class="centered">
            <header class="item-header">
              <h2 class="item-title">TITLE</h2>
            </header>
            <input type="text" class="task_title" placeholder="Task" name="Task" value="<?php echo task_title;?>">
        </li>
          <span class="error">* <?php echo $nameErr;?></span>
        <li class="list-item">
          <header class="item-header">
            <h2 class="item-title">DESCRIPTION</h2>
          </header>
          <input type="text" class="task_description" placeholder="Description" name="Description" value="<?php echo task_title;?>">
        </li>

        <li class="list-item">
          <header class="item-header">
            <h2 class="item-title">START AT</h2>
          </header>
          <input type="text" class="task_start_timestamp" placeholder="Start" name="Start" value="<?php echo task_title;?>">
        </li>

        <li class="list-item">
          <header class="item-header">
            <h2 class="item-title">END AT</h2>
          </header>
          <input type="text" class="task_end_timestamp" placeholder="End" name="End" value="<?php echo task_title;?>">
        </li>

        <li class="list-item">
          <header class="item-header">
            <h2 class="item-title">Date: <input type="text" id="datepicker"></h2>
          </header>
        </li>
        </div>

    </ul>
  </div>


    <!-- footer -->

    <div class="main-footer">Show:
      <a href=#>All task </a>
      <a href=#>ToDo task </a>
      <a href=#>Done task </a>
    </div>
  </div>
  <script type="text/javascript" src="script.js"></script>
</body>

</html>
