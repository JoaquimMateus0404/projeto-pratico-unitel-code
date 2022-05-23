<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="author" content="Joaquim Duarte Mateus/Cleansoft">
    <meta name="theme-color" content="#FFC107">
    <meta name="msapplication-TileColor" content="#FFC107">
    <title><?php $titulo="Login"; echo $titulo; ?></title>
    <!--favicon-->
    <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
    <!--Links CSS-->
    <link rel="stylesheet" href="../css/styles.css">
    <!--Icones-->
    <link rel="stylesheet" href="../css/bootstrap-icons-1.8.2/bootstrap-icons.css">
</head>

<body>
<section class="td bg-info">
    <main class="form-signin ">
        <form>
            
            <div class="d-flex align-items-center justify-content-center ">
                <img class="mb-4 " src="./img/logo_branca.png" alt="" width="200" height="57">
                
            </div>
            <h1 class="h3 mb-3 fw-normal text-center">Fazer login</h1>

            <div class="form-floating mb-2">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            </div>
            <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Senha">
            </div>

            <div class="row checkbox mb-3 align-items-center justify-content-center">
                <div class="col-md-6">
                    <a href="">Esqueci a senha</a>
                </div>
                <div class="col-md-6 d-flex  justify-content-end">
                    <label>
                        <input type="checkbox" value="remember-me"> Lembrar-me
                    </label>
                </div>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Iniciar Sessao</button>
            <p class="mt-5 mb-3 text-muted text-center ">&copy; 2022 CleanSoft. Todos os Direitos Reservados.</p>
        </form>
    </main>
</section>
</body>
</html>