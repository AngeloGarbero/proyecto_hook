package calorias;

public class Ingrediente {
// atributos 
    private String nombre;
    private int caloria;
    private int cantidad;
// constructor
    public Ingrediente(String nombre, int calorias, int cantidad) {
        this.nombre = nombre;
        this.caloria = calorias;
        this.cantidad = cantidad;
    }
// metodos 
    public String getNombre() {
        return nombre;
    }

    public int getCaloria() {
        return caloria;
    }

    public int getCantidad() {
        return cantidad;
    }

    public void setNombre(String nombre) {
        this.nombre = nombre;
    }

    public void setCaloria(int caloria) {
        this.caloria = caloria;
    }

    public void setCantidad(int cantidad) {
        this.cantidad = cantidad;
    }

    @Override
    public String toString() {
        return "Ingrediente: " + nombre + ", calorias: " + caloria + ", cantidad: " + cantidad + '.';
    }


}
