<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Site - Ranuci Topografia</title>
</head>
<body>
    <p>Nome do Remetente: {{ $mailData['name'] }}</p>
    <p>Telefone do remetente: {{ $mailData['phone'] }}</p>
    <p>Email do remetente: {{ $mailData['email'] }}</p>
    <p>Menssagem do remetente: {{ $mailData['message'] }}</p>
</body>
</html>
