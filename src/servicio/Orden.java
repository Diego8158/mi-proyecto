package servicio;

import Ventas.Computadora;

public class Orden {
    private final int idOrden;
    private Computadora[] computadoras;
    private static int contadorOrdenes;
    private int contadorComputadoras;
    private static final int MAX_COMPUTADORAS = 10;

    public Orden() {
        this.idOrden = ++contadorOrdenes;
        this.computadoras = new Computadora[MAX_COMPUTADORAS];
    }

    public void agregarComputadora(Computadora computadora) {
        if (contadorComputadoras < MAX_COMPUTADORAS) {
            this.computadoras[contadorComputadoras++] = computadora;
        } else {
            System.out.println("Se ha alcanzado el máximo de computadoras por orden.");
        }
    }

    public void mostrarOrden() {
        System.out.println("\nOrden #" + idOrden);
        for (int i = 0; i < contadorComputadoras; i++) {
            System.out.println(computadoras[i]);
        }
    }
}

