<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
            <!-- place navbar here -->
        </header>
        <main></main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
        <?php
        function chao($ten, $gioitinh, $tuoi) {
            $greeting = "Xin chào ";
            if ($tuoi < 18) {
                $greeting .= "em ";
            } elseif ($tuoi >= 18 && $tuoi < 40) {
                if ($gioitinh == "Nam") {
                    $greeting .= "anh ";
                } else {
                    $greeting .= "chị ";
                }
            } elseif ($tuoi >= 40 && $tuoi < 60) {
                if ($gioitinh == "Nam") {
                    $greeting .= "bác ";
                } else {
                    $greeting .= "cô ";
                }
            } else {
                if ($gioitinh == "Nam") {
                    $greeting .= "ông ";
                } else {
                    $greeting .= "bà ";
                }
            }
            $greeting .= $ten;
            return $greeting;
        }
        $name = "Nguyen An Ninh";
        $gender = "Nam";
        $age = 25;
        echo chao($ten, $gioitinh, $tuoi);
        ?>
    </body>
</html>
