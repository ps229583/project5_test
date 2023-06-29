<x-app-layout>
<!DOCTYPE html>
<html lang="nl" xmlns:mso="urn:schemas-microsoft-com:office:office"
    xmlns:msdt="uuid:C2F41010-65B3-11d1-A29F-00AA00C14882">

<head>
    <title>SummaMove</title>
    <meta charset="utf-8" />
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
</head>

<body onload="laad()">
    <h1>Summa move oefeningen</h1>


    <br />
    <table id="oefeningen_tabel">
        <tr>
            <th>Naam</th>
            <th>Beschrijving</th>
            <th>vertaling</th>
        </tr>
        <tbody id="tabelInhoud" />
    </table>

 

    <script src="{{ asset('js/summaMove.js') }}"></script>
</body>
</html>


</x-app-layout>
