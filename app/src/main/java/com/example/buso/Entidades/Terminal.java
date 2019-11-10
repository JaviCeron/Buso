package com.example.buso.Entidades;

import java.io.Serializable;

public class Terminal implements Serializable {
    private Integer idTerminal;
    private String nombreTerminal;

    public Terminal(Integer idTerminal, String nombreTerminal) {
        this.idTerminal = idTerminal;
        this.nombreTerminal = nombreTerminal;
    }

    public Terminal(){

    }

    public Integer getIdTerminal() {
        return idTerminal;
    }

    public void setIdTerminal(Integer idTerminal) {
        this.idTerminal = idTerminal;
    }

    public String getNombreTerminal() {
        return nombreTerminal;
    }

    public void setNombreTerminal(String nombreTerminal) {
        this.nombreTerminal = nombreTerminal;
    }
}
