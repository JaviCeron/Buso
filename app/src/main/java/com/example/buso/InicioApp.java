package com.example.buso;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;

public class InicioApp extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_inicio_app);
    }


    public void onClick(View view) {
        Intent miIntent=null;
        switch (view.getId()){
            case R.id.btnAdmin:
                miIntent=new Intent(InicioApp.this, SesionAdmin.class);
                break;
            case R.id.btnCliente:
                miIntent=new Intent(InicioApp.this, WebCliente.class);
                break;
        }
        if (miIntent!=null){
            startActivity(miIntent);
        }

    }
}
