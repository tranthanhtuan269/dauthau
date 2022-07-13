<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="/css/main.css">
	<title></title>
</head>
<body>

    <table class="table h-home-table h-home-table-3">
        <tbody>
            <!--Item-->
            @foreach($duans as $duan)
                @component('project', ['project' => $duan])
                @endcomponent
            @endforeach
        </tbody>
    </table>
</body>
</html>