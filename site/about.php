<?php
    include "includes/fileHeaderStart.php";
    ?>
    <title>NUbots Codebase - About</title>
    <?php
    include "includes/fileHeaderEnd.php";
    include "includes/bodyHeader.php";
    ?>
<div id="content">
    <h1>About</h1>
    <p>
    The NUbots codebase runs on Ubuntu 12.04, on the <a href="http://www.robotis.com/xe/darwin_en">
    DARwIn-OP</a> humanoid robot,
    and is used to play robotic football (soccer) in the annual <a href="http://www.robocup.org/">
    Robocup</a> competition, in the <a href="http://www.tzi.de/humanoid">Kid Size Humanoid League</a>.
    </p>
    <p>
    It is presently implemented as a modular architecture, that uses a blackboard for communication. 
    However, work is underway to port the sytem to an event-driven architecture.
    </p>
    <p>
    The codebase is mostly implemented in C++11. It is designed to be compiled using GCC 4.8 or later.
    The code can be compiled on Windows, Linux and Mac operating systems.
    </p>
    <p>
    The code is released as open source software, under the <a href="http://www.gnu.org/licenses/gpl-2.0.html">
    GNU GPL v2</a>. This is done in the hope that
    the codebase a whole, or any of its parts, can be used to further robotics research and development 
    in the personal, academic, commercial and non-profit sectors.
    </p>
</div>
<?php 
    include "includes/fileFooter.php";
?>