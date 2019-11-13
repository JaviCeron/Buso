package com.example.buso;

import androidx.appcompat.app.AppCompatActivity;

import android.os.Bundle;
import android.webkit.WebView;
import android.webkit.WebViewClient;

public class WebAdministrador extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_web_administrador);
        //getSupportActionBar().hide();
        WebView webviewadmin =findViewById(R.id.webviewadmin);
        webviewadmin.getSettings().setJavaScriptEnabled(true);//Permite que algunas paginas funcionen bien
        webviewadmin.getSettings().setBuiltInZoomControls(true);//Permite e zoom si la pagina no es responsive
        webviewadmin.loadUrl("https://www.google.es/");

        //Metodo que permite navegar dentro del WebView sin abrir el navegador

        webviewadmin.setWebViewClient(new WebViewClient(){
            public boolean shouldOverriceUrlLoading(WebView view, String url){
                return false;//Permite que la pagina se refresque en el WebView
            }
        });
    }
}
