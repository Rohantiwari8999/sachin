@include('sections.header')
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <style>
        #main_footer {
            position: relative;
            margin-bottom: 30px;
        }
        body {
            background-color: #ebf0dc;
            color: #fe4c1c;
            color: ;
        }
    </style>
</head>
@@ -22,9 +21,9 @@
        @yield('mainSection')
    </div>

    <div id="main_footer">
        @include('sections.footer')
    </div>
        <div id="main_footer">
            @include('sections.footer')
        </div>
</body>

</html>
