<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>MultiShop - Loja Online</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">  

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/estilo.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>

<body>
<!-- Topbar Start -->
<div class="container-fluid">
    <div class="row bg-secondary py-1 px-xl-5">
        <div class="col-lg-6 d-none d-lg-block">
            <div class="d-inline-flex align-items-center h-100">
                <a class="text-body mr-3" href="">Sobre</a>
                <a class="text-body mr-3" href="">Contato</a>
                <a class="text-body mr-3" href="">Ajuda</a>
                <a class="text-body mr-3" href="">FAQs</a>
            </div>
        </div>
        <div class="col-lg-6 text-center text-lg-right">
            <div class="d-inline-flex align-items-center">
                <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">Minha Conta</button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <button class="dropdown-item" type="button">Logar</button>
                        <button class="dropdown-item" type="button">Cadastrar</button>
                    </div>
                </div>
                
                <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">PT-BR</button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <button class="dropdown-item" type="button">PT</button>
                        <button class="dropdown-item" type="button">EN</button>
                        <button class="dropdown-item" type="button">ES</button>
                    </div>
                </div>
            </div>
            <div class="d-inline-flex align-items-center d-block d-lg-none">
                <a href="" class="btn px-0 ml-2">
                    <i class="fas fa-heart text-dark"></i>
                    <span class="badge text-dark border border-dark rounded-circle" style="padding-bottom: 2px;">0</span>
                </a>
                <a href="" class="btn px-0 ml-2">
                    <i class="fas fa-shopping-cart text-dark"></i>
                    <span class="badge text-dark border border-dark rounded-circle" style="padding-bottom: 2px;">0</span>
                </a>
            </div>
        </div>
    </div>
    <div class="row align-items-center bg-light py-3 px-xl-5 d-none d-lg-flex">
        <div class="col-lg-4">
            <a href="" class="text-decoration-none">
                <span class="h1 text-uppercase text-primary bg-dark px-2">Multi</span>
                <span class="h1 text-uppercase text-dark bg-primary px-2 ml-n1">Shop</span>
            </a>
        </div>
        <div class="col-lg-4 col-6 text-left">
            <form action="">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Pesquise produtos">
                    <div class="input-group-append">
                        <span class="input-group-text bg-transparent text-primary">
                            <i class="fa fa-search"></i>
                        </span>
                    </div>
                </div>
            </form>
        </div>
        
    </div>
</div>
<!-- Topbar End -->


<!-- Navbar Start -->
<div class="container-fluid bg-dark mb-30">
    <div class="row px-xl-5">
        <div class="col-lg-3 d-none d-lg-block">
            <a class="btn d-flex align-items-center justify-content-between bg-primary w-100" data-toggle="collapse" href="#navbar-vertical" style="height: 65px; padding: 0 30px;">
                <h6 class="text-dark m-0"><i class="fa fa-bars mr-2"></i>Categorias</h6>
                <i class="fa fa-angle-down text-dark"></i>
            </a>
            <nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 bg-light" id="navbar-vertical" style="width: calc(100% - 30px); z-index: 999;">
                <div class="navbar-nav w-100">
                    <div class="nav-item dropdown dropright">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Vestidos <i class="fa fa-angle-right float-right mt-1"></i></a>
                        <div class="dropdown-menu position-absolute rounded-0 border-0 m-0">
                            
                            <a href="" class="dropdown-item">Vestidos Femininos</a>
                            <a href="" class="dropdown-item">Vestidos Infântis</a>
                        </div>
                    </div>
                    <a href="" class="nav-item nav-link">Camisas</a>
                    <a href="" class="nav-item nav-link">Jeans</a>
                    <a href="" class="nav-item nav-link">Banho</a>
                    <a href="" class="nav-item nav-link">Pijamas</a>
                    <a href="" class="nav-item nav-link">Esportes</a>
                    <a href="" class="nav-item nav-link">Macacões</a>
                    <a href="" class="nav-item nav-link">Blazers</a>
                    <a href="" class="nav-item nav-link">Jaquetas</a>
                    <a href="" class="nav-item nav-link">Tênis</a>
                </div>
            </nav>
        </div>
        <div class="col-lg-9">
            <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-0">
                <a href="" class="text-decoration-none d-block d-lg-none">
                    <span class="h1 text-uppercase text-dark bg-light px-2">Multi</span>
                    <span class="h1 text-uppercase text-light bg-primary px-2 ml-n1">Shop</span>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav mr-auto py-0">
                        <a href="home.php" class="nav-item nav-link active">Home</a>
                        <a href="shop.php" class="nav-item nav-link">Comprar</a>
                        
                        <div class="nav-item dropdown">
                            
                        </div>
                        <a href="contact.php" class="nav-item nav-link">Contato</a>
                    </div>
                    <div class="navbar-nav ml-auto py-0 d-none d-lg-block">
                        <a href="" class="btn px-0">
                            <i class="fas fa-heart text-primary"></i>
                            <span class="badge text-secondary border border-secondary rounded-circle" style="padding-bottom: 2px;">0</span>
                        </a>
                        <a href="cart.php" class="btn px-0 ml-3">
                            <i class="fas fa-shopping-cart text-primary"></i>
                            <span class="badge text-secondary border border-secondary rounded-circle" style="padding-bottom: 2px;">0</span>
                        </a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
<!-- Navbar End -->


    <!-- Breadcrumb Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark" href="#">Home</a>
                    <a class="breadcrumb-item text-dark" href="#">Comprar</a>
                    <span class="breadcrumb-item active">Pedido Finalizado</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->


    <!-- Checkout Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-lg-8 d-flex flex-column">
                <h5>Status do Pedido</h5>
                <div class="d-flex flex-column  justify-content-center align-items-center mb-5 row h-100">
                    <div class="col-10 d-flex border-bottom  align-items-center bg-light flex-column">
                        <h6 class="py-4">Camiseta - Vendido e entregue por MultiShop</h6>
                        <div id="barra" class="w-75 border mt-5" style="height: 5px;background-color: rgb(37, 37, 37);">
                          
                            <div id="circulo-barra">

                                <i class='bx bx-note rounded-circle border border-success' style="background-color: rgb(120, 228, 110);"></i>
                                <i class='bx bx-money rounded-circle' style="background-color: rgb(120, 228, 110);"></i>
                                <i class='bx bx-package rounded-circle'></i>
                                <i class='bx bxs-truck rounded-circle'></i>
                                <i class='bx bxs-home-alt-2 rounded-circle' ></i>
                            </div>
                        <div class="mt-4 justify-content-center flex-column w-100 align-items-center d-flex">
                            <h6 class="py-4">Status: Pagamento confirmado 20/05/2024 15:54</h6>
                            <h6 class="">Previsão de entrega: 04/06/2024</h6>
                        </div>
                        <div class="mt-5 d-flex justify-content-center align-items-center flex-column w-100">
                            <button class="btn btn-outline-primary my-4 w-50">ACOMPANHAR ENTREGA</button>
                            <button class="btn btn-outline-secondary text-dark w-50">TROCAR PRODUTO</button>
                        </div>
                        </div>
                    </div>
                                      
                    
                </div>
            </div>
            
            
                
            
            <div class="col-lg-4">
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Detalhes do Pedido</span></h5>
                <div class="bg-light p-30 mb-5">
                    <div class="border-bottom">
                        <h6 class="mb-3">Produto</h6>
                        <div class="d-flex justify-content-between">
                            <p><?=$_GET['nome']?></p>
                            <p><?=$_GET['preco']?></p>
                        </div>
                        
                    </div>
                    <div class="border-bottom pt-3 pb-2">
                        <div class="d-flex justify-content-between mt-2">
                            <h5>Total</h5>
                            <h5 id="total"><?=$_GET['total']?></h5>
                        </div>
                        <div class="d-flex justify-content-between mt-2 mb-3">
                            <h6>Subtotal de produtos</h6>
                            <h6><?=$_GET['preco']?></h6>
                            
                        </div>
                        <div class="d-flex justify-content-between mb-3">
                            <h6 class="font-weight-medium">Frete</h6>
                            <h6 class="font-weight-medium" id="frete"><?=$_GET['frete']?></h6>
                        </div>
                       
                    </div>
                    <div class="pt-2">
                        
                        <div class="d-flex justify-content-between mt-2">
                            <h5>Pagamento</h5>
                            <h6 id="total">Cartão de crédito</h5>
                        </div>
                        <div class="border-bottom pt-3 pb-2">
                            <div class="d-flex justify-content-between mb-3">
                                <h6>Endereço de entrega</h6>
                                
                            </div>
                            <div class="d-flex justify-content-between mb-3">
                                <h6 name="endereco" id="cep">Rua Maria Susano Polilo 516</h6>
                                
                            </div>
                            <div class="d-flex justify-content-between mb-3">
                                <h6 name="endereco" id="logr">São Paulo - SP</h6>
                                
                            </div>
                            <div class="d-flex justify-content-between mb-3">
                                <h6  name="endereco" id="cidade">São Miguel Paulista</h6i>
                                
                            </div>
                            <div class="d-flex justify-content-between mb-3">
                                <h6 name="endereco" id="estado">São Miguel Paulista</h6i>
                                
                            </div>
                            <div class="d-flex justify-content-between mb-3">
                                <h6 name="endereco" id="numero">São Miguel Paulista</h6i>
                                
                            </div>
                           
                        </div>
                        <button class="btn btn-block btn-primary font-weight-bold mt-3 py-3">Confirmar pedido</button>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- Checkout End -->


   <!-- Footer Start -->
<div class="container-fluid bg-dark text-secondary mt-5 pt-5">
    <div class="row px-xl-5 pt-5">
        <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
            <h5 class="text-secondary text-uppercase mb-4">Entre em contato</h5>
            <p class="mb-4">Facilitamos o modo de contato para garantir mais proximidade com nossos clientes.</p>
            <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>123 Rua Manuel Feliciano</p>
            <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>multishop@contato.com</p>
            <p class="mb-0"><i class="fa fa-phone-alt text-primary mr-3"></i>11 98087-0129</p>
        </div>
        <div class="col-lg-8 col-md-12">
            <div class="row">
                <div class="col-md-4 mb-5">
                    <h5 class="text-secondary text-uppercase mb-4">Navegue</h5>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Home</a>
                        <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Nosso Comércio</a>
                        <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Carrinho</a>
                        <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Checkout</a>
                        <a class="text-secondary" href="#"><i class="fa fa-angle-right mr-2"></i>Contato</a>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <h5 class="text-secondary text-uppercase mb-4">Minha Conta</h5>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Sair</a>
                        <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Carrinho</a>
                        
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <h5 class="text-secondary text-uppercase mb-4">Novo por aqui?</h5>
                    <p>Cadastre-se e garanta acesso ao melhor e-commerce do Brasil</p>
                    <form action="">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Seu Email">
                            <div class="input-group-append">
                                <button class="btn btn-primary">Cadastrar</button>
                            </div>
                        </div>
                    </form>
                    <h6 class="text-secondary text-uppercase mt-4 mb-3">Siga</h6>
                    <div class="d-flex">
                        <a class="btn btn-primary btn-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-primary btn-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-primary btn-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-primary btn-square" href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row border-top mx-xl-5 py-4" style="border-color: rgba(256, 256, 256, .1) !important;">
        <div class="col-md-6 px-xl-0">
            <p class="mb-md-0 text-center text-md-left text-secondary">
                &copy; <a class="text-primary" href="#">www.multishop.com</a>. Todos os direitos reservados.
                
                
            </p>
        </div>
        <div class="col-md-6 px-xl-0 text-center text-md-right">
            <img class="img-fluid" src="img/payments.png" alt="">
        </div>
    </div>
</div>
<!-- Footer End -->



    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    

    
    <script>
        let freteOk = false
        const fixTotal = () =>{
            let total =document.getElementById("total").innerText.split("R$")[1]
            total =(parseFloat(total) + 22.90)
            console.log(total)
            document.getElementById("total").innerText = "R$"+total.toFixed(2)
            freteOk = true
        }
        setInterval(() =>{
        if($("#logr").val() != "" 
        && $("#cidade").val() != ""
        && $("#estado").val() != ""
        && $("#num").val() != ""
        ){
            document.getElementById("frete").innerText = "R$22.90"
            if(!freteOk){
                fixTotal()
            }
        }
    },1000)
    
const update = (final) =>{
    let ct = parseInt(localStorage.getItem("clicks")) + parseInt(localStorage.getItem("clicksCertos"))
    let ce = parseInt(localStorage.getItem("clicks"))
    let pp;
    let cc;
    if (final) cc = '1'
    else cc = '0'
    let url;

    url ='../app/model/atualizarTentativa.php'

    let data = new Date()
    let string = localStorage.getItem("dataInicio")
    let dataInicio = new Date(string)
    
    dataInicio = new Date(string)
  
     
    let diferencaMS =   data -dataInicio
    
    
    let segundosC = (diferencaMS/1000)
    let minutosC = segundosC/60
    segundosC = segundosC%60
    let horasC = minutosC/60
    minutosC = minutosC%60
    let tt = parseInt(horasC)+":"+parseInt(minutosC)+":"+parseInt(segundosC)
    console.log(tt)
    if(ce == 0){
        pp = 1
    } else{
        pp = 0
    }
    let id = localStorage.getItem("id")
    $.ajax({
        type: 'POST',
        dataType: 'json',
        data: {
            ct: ct,
            ce: ce,
            pp: pp,
            tt:tt,
            cc: cc,
            t:'E-commerce',
            id: id
        },
        url: '../app/model/atualizarTentativa.php',
        async: true,
        
        success: (response) =>{
            console.log(response)
            
            if(response.id !== undefined){
                
            idTentativa = response.id
            }
            
        },
        error: (e) =>{
            console.log(e)
        }
    })
}

if(localStorage.getItem("endereco") != undefined){
    let enderecos = document.getElementsByName('endereco')
    
    let enderecosL = localStorage.getItem("endereco").split(",")
    if(enderecos.length != 0){
        for(var i =0;i<enderecos.length;i++){
            enderecos[i].innerText = enderecosL[i]
        }
    }
    console.log(enderecosL)
}
localStorage.removeItem("clicks")
localStorage.removeItem("clicksCertos")
localStorage.removeItem("finalizou")
localStorage.removeItem("lugaresCertos")
localStorage.removeItem("id")
localStorage.removeItem('dataInicio')
localStorage.removeItem("carrinho")
localStorage.removeItem("url")
    
    document.addEventListener("click", () =>{
        window.location.href = "index.php"
    })
    </script>
</body>

</html>