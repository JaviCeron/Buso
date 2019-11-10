package com.example.buso;

import androidx.appcompat.app.AppCompatActivity;

import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;

import com.example.buso.Entidades.Terminal;

public class RegistroTerminal extends AppCompatActivity {

    Button btnAgregarTerminal;
    EditText edtNombreTerminal;
    boolean inputEt=false;
    Metodos metodos= new Metodos();
    Terminal terminal = new Terminal();

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_registro_terminal);

        edtNombreTerminal = findViewById(R.id.edtNombreTerminal);
        btnAgregarTerminal = findViewById(R.id.btnAgregarTerminal);


        btnAgregarTerminal.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {

                if(edtNombreTerminal.getText().toString().length()==0){
                    edtNombreTerminal.setError("Campo obligatorio");
                    inputEt = false;
                }else {
                    inputEt=true;
                }
                if (inputEt){
                    String nombre = edtNombreTerminal.getText().toString();
                    metodos.guardarTerminal(RegistroTerminal.this, nombre);

                    limpiarDatos();
                    edtNombreTerminal.requestFocus();

                }
            }
        });
    }

    public void limpiarDatos(){
        edtNombreTerminal.setText(null);
    }
}
