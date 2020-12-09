<html>

<head>
    <script>
        var total = 0;

        function sumar(valor) {
            total += valor;
            document.formulario.total.value = total;
        }

        function restar(valor) {
            total -= valor;
            document.formulario.total.value = total;
        }
    </script>
</head>

<body>
    <form name=formulario>
        Ingredientes del sandwich
        <br>
        <input name="checkbox" type="checkbox" onClick="if (this.checked) sumar(126); else restar(126)" value="checkbox">
        Jamon cocido
        <br>
        <input name="checkbox" type="checkbox" onClick="if (this.checked) sumar(136); else restar(136)" value="checkbox">
        Jamon crudo
        <br>
        <input name="checkbox" type="checkbox" onClick="if (this.checked) sumar(264); else restar(264)" value="checkbox">
        Queso
        <br>
        <input name="checkbox" type="checkbox" onClick="if (this.checked) sumar(15); else restar(15)" value="checkbox">
        Lechuga
        <br>
        <input name="checkbox" type="checkbox" onClick="if (this.checked) sumar(23); else restar(23)" value="checkbox">
        Tomate
        <br>
        Total de calorias
        <input type=text name=total value=0>
    </form>
</body>