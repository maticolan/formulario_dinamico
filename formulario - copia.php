<!DOCTYPE html>
<html>
<head>
	<title>Formulario</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>FORMULARIO</h1>
	<form action="#" method="post">
		<label for="nombres">Ingrese nombre y apellidos:</label>
		<input type="text" id="nombres" name="nombres" required>
        <br>

		<label for="fecha_nacimiento">Ingrese su fecha de nacimiento</label>
		<input type="date" id="fecha_nacimiento" name="fecha_nacimiento" required>
        <br>

		<label for="ocupacion">Ingrese su ocupación</label>
		<input type="text" id="ocupacion" name="ocupacion" required>
        <br>

		<label for="contacto">Ingrese su contacto (telefono, email)</label>
		<input type="text" id="contacto" name="contacto" required>
        <br>

		<label for="nacionalidad">Seleccione su nacionalidad</label>
		<select id="nacionalidad" name="nacionalidad" required>
			<option value="">Seleccione una opción</option>
			<option value="eeuu">Estados Unidos</option>
			<option value="canada">Canadá</option>
			<option value="peru">Perú</option>
			<option value="bolivia">Bolivia</option>
			<option value="mexico">México</option>
			<option value="brasil">Brasil</option>
			<option value="colombia">Colombia</option>
			<option value="otros">Otros</option>
		</select>
        <br>

		<label for="nivel_ingles">Nivel de inglés</label>
		<div>
			<label>
				<input type="radio" name="nivel_ingles" value="basico" required> Básico
			</label>
			<label>
				<input type="radio" name="nivel_ingles" value="intermedio"> Intermedio
			</label>
			<label>
				<input type="radio" name="nivel_ingles" value="avanzado"> Avanzado
            </label>
            <label>
                <input type="radio" name="nivel_ingles" value="Fluido" required> Fluido
            </label>
            <br>
                <form>
                    
            <label for="lenguajes">Lenguajes de programación:</label><br>
            <select id="lenguajes" name="lenguajes[]" multiple>
              <option value="java">Java</option>
              <option value="python">Python</option>
              <option value="c++">C++</option>
              <option value="javascript">JavaScript</option>
              <br>
            
            </select><br><br>
            
            <label for="aptitudes">Aptitudes:</label>
            <input list="aptitudes" name="aptitudes">
            <datalist id="aptitudes">
              <option value="Trabajo en equipo">
              <option value="Liderazgo">
              <option value="Resolución de problemas">
            </datalist><br><br>
            
            <label for="habilidades">Habilidades:</label><br>
            <label for="creatividad">Creatividad</label>
            <input type="checkbox" id="creatividad" name="habilidades[]" value="creatividad">
            <label for="paciencia">Paciencia</label>
            <input type="checkbox" id="paciencia" name="habilidades[]" value="paciencia">
            <label for="respeto">Respeto</label>
            <input type="checkbox" id="respeto" name="habilidades[]" value="respeto">
            
            <label for="perfil">Perfil:</label><br>
            <textarea id="perfil" name="perfil" rows="10" cols="50"></textarea><br><br>


            
            <input type="submit" value="Enviar">
    </form>
    <?php
    include("form.php");
    ?>
</body>
</html>