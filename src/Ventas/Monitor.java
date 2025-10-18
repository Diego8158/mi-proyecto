package Ventas;

public class Monitor {
    private final int idMonitor;
    private String marca;
    private double tamanio;
    private static int contadorMonitores;

    public Monitor (String marca, double tamanio) {
        this.idMonitor = ++contadorMonitores;
        this.marca = marca;
        this.tamanio = tamanio;
    }

    @Override
    public String toString() {
        return "Monitor #" + idMonitor + " {Marca: " + marca + ", Tamaño: " + tamanio + " pulgadas}";
    }
}
