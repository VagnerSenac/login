 
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Cadastro</title>
   <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<link rel="stylesheet" href="estilo.css">
</head>
<body>
   <div class="container">
<div class="wrapper">
<h2>Cadastro</h2>
<p>Por favor, preencha este formulário para criar uma conta.</p>
<form method="post">
<div class="form-group">
<label>Nome do usuário</label>
<input type="text" name="username" class="form-control">
<span class="invalid-feedback">
</div>    
<div class="form-group">
<label>Senha</label>
<input type="password" name="password" class="form-control">
<span class="invalid-feedback"></span>
</div>
<div class="form-group">
<label>Confirme a senha</label>
<input type="password" name="confirm_password" class="form-control">
<span class="invalid-feedback"></span>
</div>
<div class="form-group">
<input type="submit" class="btn btn-primary" value="Criar Conta">
<input type="reset" class="btn btn-secondary ml-2" value="Apagar Dados">
</div>
<p>Já tem uma conta? Entre aqui</a>.</p>
</form>
</div> 
</div>   
</body>
</html>