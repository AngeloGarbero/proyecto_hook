package calorias;

public class Main {

    public static void main(String[] args) {
        Ingrediente ingrediente1 = new Ingrediente("lechuga", 100, 10);
        Ingrediente ingrediente2 = new Ingrediente("tomate", 120, 2);
        
        System.out.println(ingrediente1.toString());
        System.out.println(ingrediente2.toString());
        
        int sumarIng1 = ingrediente1.getCaloria() * ingrediente1.getCantidad();
        int sumarIng2 = ingrediente2.getCaloria() * ingrediente2.getCantidad();
        int sumarIngredientes = sumarIng1 + sumarIng2;
        
        System.out.println("Las calorias de este sandwich son: " +  sumarIngredientes);
        
    }

}
