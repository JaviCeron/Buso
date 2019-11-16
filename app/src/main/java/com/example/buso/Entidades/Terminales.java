package com.example.buso.Entidades;

public class Terminales {
    Integer idterminal;
    String nombre_terminal;

    public Terminales() {
    }

    public Terminales(Integer idterminal, String nombre_terminal) {
        this.idterminal = idterminal;
        this.nombre_terminal = nombre_terminal;
    }

    public Integer getIdterminal() {
        return idterminal;
    }

    public void setIdterminal(Integer idterminal) {
        this.idterminal = idterminal;
    }

    public String getNombre_terminal() {
        return nombre_terminal;
    }

    public void setNombre_terminal(String nombre_terminal) {
        this.nombre_terminal = nombre_terminal;
    }
}
