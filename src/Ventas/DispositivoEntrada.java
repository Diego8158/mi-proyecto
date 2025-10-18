package Ventas;

public class DispositivoEntrada {
    private String tipoEntrada;
    private String marca;

    public DispositivoEntrada(String tipoEntrada, String marca) {
        this.tipoEntrada = tipoEntrada;
        this.marca = marca;
    }

    public String getTipoEntrada() {
        return tipoEntrada;
    }

    public String getMarca() {
        return marca;
    }

    @Override
    public String toString() {
        return "Tipo de entrada: " + tipoEntrada + ", Marca: " + marca;
    }
}
