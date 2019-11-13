package com.example.buso;

import androidx.appcompat.app.AppCompatActivity;

import android.os.Bundle;
import android.webkit.WebView;

public class WebAdministrador extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_web_administrador);
        WebView webviewadmin =findViewById(R.id.webviewadmin);
        webviewadmin.getSettings().setJavaScriptEnabled(true);//Permite que algunas paginas funcionen bien
        webviewadmin.getSettings().setBuiltInZoomControls(true);//Permite e zoom si la pagina no es responsive
        webviewadmin.loadUrl("https://www.google.es/");
    }
}
