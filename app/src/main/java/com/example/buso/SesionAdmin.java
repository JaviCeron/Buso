package com.example.buso;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Toast;

import androidx.appcompat.app.AppCompatActivity;

public class SesionAdmin extends AppCompatActivity {

    EditText contrasena;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_sesion_admin);
        contrasena=findViewById(R.id.contra);
        Button btnVerificar = (Button)findViewById(R.id.btnVerificar);
        btnVerificar.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                String contra = ((EditText)findViewById(R.id.contra)).getText().toString();
                if(contra.equals("buso")){
                    Intent i = new Intent(SesionAdmin.this, WebAdministrador.class);
                    startActivity(i);
                }else {
                    Toast.makeText(getApplicationContext(),"La clave ingresada es incorrecta",Toast.LENGTH_SHORT).show();
                    contrasena.setText(null);
                }
            }
        });
    }
}
