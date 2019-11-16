package com.example.buso;

import java.io.Serializable;

public class Terminales implements Serializable {
    int idterminal;
    String nombre;

    public Terminales() {
    }

    public Terminales(int idterminal, String nombre) {
        this.idterminal = idterminal;
        this.nombre = nombre;
    }

    public int getIdterminal() {
        return idterminal;
    }

    public void setIdterminal(int idterminal) {
        this.idterminal = idterminal;
    }

    public String getNombre() {
        return nombre;
    }

    public void setNombre(String nombre) {
        this.nombre = nombre;
    }
}
