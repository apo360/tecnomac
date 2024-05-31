@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<!-- Exibir os dados do email se a variável $emailData estiver definida -->
@if (isset($emailData))
    <p>Nome: {{ $emailData['name'] }}</p>
    <p>Email: {{ $emailData['email'] }}</p>
    <p>Assunto: {{ $emailData['subject'] }}</p>
    <p>Mensagem: {{ $emailData['message'] }}</p>
@endif