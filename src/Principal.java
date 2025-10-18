import Ventas.*;
import servicio.*;

public class Principal {
    public static void main(String[] args) {
        // Crear componentes
        Monitor monitorHP = new Monitor("HP", 15.6);
        Teclado tecladoHP = new Teclado("USB", "HP");
        Raton ratonHP = new Raton("USB", "HP");

        Computadora computadoraHP = new Computadora("HP Pavilion", monitorHP, tecladoHP, ratonHP);

        Monitor monitorDell = new Monitor("Dell", 27);
        Teclado tecladoDell = new Teclado("Bluetooth", "Dell");
        Raton ratonDell = new Raton("Bluetooth", "Dell");

        Computadora computadoraDell = new Computadora("Dell Inspiron", monitorDell, tecladoDell, ratonDell);

        // Crear orden y agregar computadoras
        Orden orden1 = new Orden();
        orden1.agregarComputadora(computadoraHP);
        orden1.agregarComputadora(computadoraDell);

        // Mostrar contenido de la orden
        orden1.mostrarOrden();
    }
}
