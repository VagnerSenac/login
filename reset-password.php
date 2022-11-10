<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Redefinir senha</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<link rel="stylesheet" href="estilo.css">
</head>
<body>
<div class="container">
<div class="wrapper">
<h2>Redefinir senha</h2>
<p>Por favor, preencha este formulário para redefinir sua senha.</p>
<form method="post"> 
<div class="form-group">
<label>Nova senha</label>
<input type="password" name="new_password" class="form-control">
<span class="invalid-feedback"></span>
</div>
<div class="form-group">
<label>Confirme a senha</label>
<input type="password" name="confirm_password" class="form-control">
<span class="invalid-feedback"></span>
</div>
<div class="form-group">
<input type="submit" class="btn btn-primary" value="Redefinir"> 
<a class="btn btn-link ml-2">Cancelar</a>
</div>
</form>
</div> 
</div>   
</body>
</html>