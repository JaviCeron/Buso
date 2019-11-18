package com.example.buso;

import android.os.Bundle;
import android.webkit.WebView;
import android.webkit.WebViewClient;

import androidx.appcompat.app.AppCompatActivity;

public class WebCliente extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_web_cliente);
        WebView webviewcliente =findViewById(R.id.webviewcliente);
        webviewcliente.getSettings().setJavaScriptEnabled(true);//Permite que algunas paginas funcionen bien
        webviewcliente.getSettings().setBuiltInZoomControls(true);//Permite e zoom si la pagina no es responsive
        webviewcliente.loadUrl("http://192.168.43.82/BusoApp/Buso/web/Web_cliente/index.php");

        //Metodo que permite navegar dentro del WebView sin abrir el navegador

        webviewcliente.setWebViewClient(new WebViewClient(){
            public boolean shouldOverriceUrlLoading(WebView view, String url){
                return false;//Permite que la pagina se refresque en el WebView
            }
        });
    }
}
