<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        @import url(https://fonts.googleapis.com/css2?family=Poppins&display=swap);
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins';
        }
        html,body{
            display: grid;
            height: 100%;
            width: 100%;
            place-items:center;
            background: #EDEDED;
            
            background-size: cover;
        }
        .wrapper{
            width: 380px;
            background: #fff;
            border-radius: 15px;
            box-shadow: 0px 15px 20px rgba(0, 0, 0, 0.1);
        }
        .wrapper .title{
            font-size: 35px;
            font-weight: 600;
            text-align: center;
            line-height: 100px;
            color: whitesmoke;
            user-select: none;
            border-radius: 15px 15px 0 0;
            background: linear-gradient(-135deg,);
            background-color: #3A5BA0;
        }
        .wrapper form .field{
            height: 50px;
            width: 100%;
            margin-top: 20px;
            position: relative;
        }
        .wrapper form .field input{
            height: 100%;
            width: 100%;
            outline: none;
            font-size: 17px;
            padding-left: 20px;
            border: 1px solid lightgrey;
            border-radius: 25px;
            transition: all 0.3s ease;
        }
        .wrapperform form .field input:focus,form .field input:valid{
            border-color: #3DB2FF;
        }
        .wrapper form .field label{
            position: absolute;
            top: 50%;
            left: 20px;
            color: #999999;
            font-weight: 400;
            font-size: 17px;
            pointer-events: none;
            transform: translateY(-50%);
            transition: all 0.3s ease;
        }
        form .field input:focus ~ label,form .field input:valid ~ label{
            top: 0%;
            font-size: 16px;
            color: #14279B;
            background: #fff;
            transform: translateY(-50%);
        }
        form .field input[type="submit"]{
            color: #fff;
            border: none;
            padding-left: 0;
            margin-top: -10px;
            font-size: 20px;
            font-weight: 500;
            cursor: pointer;
            background: linear-gradient(-135deg,);
            transition: all 0.3s ease;
            background-color: #3A5BA0;

        }
        form .field input[type="submit"]:active{
            transform: scale(0.95);
        }
        form .back{
            color: #262626;
            margin-top: 20px;
            padding-bottom: 50px;
            text-align: center;
        }
        form .back a{
            color:  #3DB2FF;
            text-decoration: none;
            float: left;
            margin-left: 20px;
        }
    </style>
    <title>Laravel | Edit-Data</title>
</head>
<body>
<div class="wrapper">
		<div class="title">
			Edit Data
		</div>
		<form action="/update/{{ $mhs->id }}" method="post" class="#">
            {{ csrf_field() }}
			<div class="field">
				<input type="text" name="Nama" required value="{{ $mhs->Nama }}">
				<label>Nama Mahasiswa</label>
			</div>

			<div class="field">
				<input type="text" name="NIM" required value="{{ $mhs->NIM }}">
				<label>NIM</label>
			</div>

			<div class="field">
				<input type="text" name="Jurusan" required value="{{ $mhs->Jurusan }}">
				<label>Jurusan</label>
			</div>

			<div class="field">
				<input type="submit" value="Submit">
			</div>

            <div class="back">
				<a href="/crud"><--Back</a>
			</div>
		</form>
	</div>
</body>
</html>