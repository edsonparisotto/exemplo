
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar</title>

    <style>
		*, *:before, *:after {
		  margin:0;
		  padding:0;
		  font-family: Arial,sans-serif;
		}

		a{ text-decoration: none; }

		a.links{ display: none; }

		.content{
		  width: 500px;
		  min-height: 560px;
		  margin: 0px auto;
		  position: relative;
		}

		h1{
		  font-size: 48px;
		  color: #066a75;
		  padding: 2px 0 10px 0;
		  font-family: Arial,sans-serif;
		  font-weight: bold;
		  text-align: center;
		  padding-bottom: 30px;
		}

		h1:after{
		  content: ' ';
		  display: block;
		  width: 100%;
		  height: 2px;
		  margin-top: 10px;
		  background: -webkit-linear-gradient(left, rgba(147,184,189,0) 0%,rgba(147,184,189,0.8) 20%,rgba(147,184,189,1) 53%,rgba(147,184,189,0.8) 79%,rgba(147,184,189,0) 100%);
		  background: linear-gradient(left, rgba(147,184,189,0) 0%,rgba(147,184,189,0.8) 20%,rgba(147,184,189,1) 53%,rgba(147,184,189,0.8) 79%,rgba(147,184,189,0) 100%);
		}

		p{ margin-bottom:15px; }

		.content p:first-child{ margin: 0px; }

		label{
		  color: #405c60;
		  position: relative;
		}

		input {
		  outline: none;
		}

		input:not([type="checkbox"]){
		  width: 95%;
		  margin-top: 5px;
		  padding: 10px;
		  border: 1px solid #b2b2b2;
		  font-size: 20px;

		  -webkit-border-radius: 3px;
		  border-radius: 3px;

		  -webkit-box-shadow: 0px 1px 4px 0px rgba(168, 168, 168, 0.6) inset;
		  box-shadow: 0px 1px 4px 0px rgba(168, 168, 168, 0.6) inset;

		  -webkit-transition: all 0.2s linear;
		  transition: all 0.2s linear;
		}

		input[type="submit"]{
		  width: 100%!important;
		  cursor: pointer;
		  background: rgb(61, 157, 179);
		  padding: 8px 5px;
		  color: #fff;
		  font-size: 20px;
		  border: 1px solid #fff;
		  margin-bottom: 10px;
		  text-shadow: 0 1px 1px #333;
		  border-radius: 5px;
		  transition: all 0.2s linear;
		}

		input[type="submit"]:hover{
		  background: #4ab3c6;
		}

		.link{
		  position: absolute;
		  background: #e1eaeb;
		  color: #7f7c7c;
		  left: 0px;
		  height: 20px;
		  width: 440px;
		  padding: 17px 30px 20px 30px;
		  font-size: 16px;
		  text-align: right;
		  border-top: 1px solid #dbe5e8;
		  border-radius: 0 0  5px 5px;
		}

		.link a {
		  font-weight: bold;
		  background: #f7f8f1;
		  padding: 6px;
		  color: rgb(29, 162, 193);
		  margin-left: 10px;
		  border: 1px solid #cbd518;
		  border-radius: 4px;
		  transition: all 0.4s  linear;
		}

		.link a:hover {
		  color: #39bfd7;
		  background: #f7f7f7;
		  border: 1px solid #4ab3c6;
		}

		#cadastro {
		  position: absolute;
		  top: 20px;
		  width: 88%;
		  padding: 18px 6% 60px 6%;
		  margin: 0 0 35px 0;
		  background: #f7f7f7;
		  border: 1px solid rgba(147, 184, 189,0.8);
		  border-radius: 5px;
		}
    </style>
</head>
<body>
	<div class="content">
	    <form action="{{ route('users.update', ['user' => $user->id]) }}" method="post" id="cadastro">
            @csrf

            @method('PUT')

	    	<h1>Editar usuário</h1>
	        <p>
		        <label for="name">Nome do usuário</label>
		        <input type="text" name="name" value="{{ $user->name }}" placeholder="exemplo: Fulano de Tal">
	        </p>
	        <p>
		        <label for="email">Email do usuário</label>
		        <input type="email" name="email" value="{{ $user->email }}" placeholder="exemplo:email@gmail.com">
	        </p>
	        <p>
		        <label for="password">Senha do usuário</label>
		        <input type="password" name="password" value="" placeholder="exemplo; 12345">
	        </p>
            <input type="submit" value="Editar usuário">
	    </form>
    </div>
</body>
</html>
