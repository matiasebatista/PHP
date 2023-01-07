<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Select</title>
</head>
<body>
<form action="ejemplo3_control.php" method="POST">
        <label >Nombre</label>
        <input type="text" name="user">
        <label >Dirección</label>
        <textarea name="dire" rows=5 cols=20></textarea>

        <p>
            <strong>Seleccione un producto</strong>
            <select name="producto">
                <option value="LG">LG</option> 
                <option value="Samsung">Samsung</option>
                <option value="Motorola">Motorola</option>
            </select>
        </p>

        
        <p>
            <strong>Seleccione varios producto</strong>
            <select name="productos[]" multiple> 
                <option value="LG">LG</option> 
                <option value="Samsung">Samsung</option>
                <option value="Motorola">Motorola</option>
                <option value="Huawei">Huawei</option>

            </select>
        </p>

        <input type="submit" value="Enviar">
    </form>
    
</body>
</html>