package com.example.buso;

import android.content.DialogInterface;
import android.os.Bundle;
import android.view.KeyEvent;
import android.view.Menu;
import android.view.MenuItem;
import android.view.WindowManager;
import android.widget.Toast;

import androidx.appcompat.app.AlertDialog;
import androidx.appcompat.app.AppCompatActivity;
import androidx.recyclerview.widget.LinearLayoutManager;
import androidx.recyclerview.widget.RecyclerView;

import com.android.volley.Request;
import com.android.volley.Response;
import com.android.volley.VolleyError;
import com.android.volley.toolbox.StringRequest;
import com.example.buso.Entidades.Terminales;

import org.json.JSONArray;
import org.json.JSONException;
import org.json.JSONObject;

import java.util.ArrayList;
import java.util.List;


public class Consulta_RecyclerViewTerminal extends AppCompatActivity {

    private static final String URL = Conf.listarTerminal;

    List<Terminales> terminalesList;
    RecyclerView recyclerView;

    TerminalAdapter adapter;

    AlertDialog.Builder dialogo;

    @Override
    public boolean onKeyDown(int keyCode, KeyEvent event) {
        if (keyCode == KeyEvent.KEYCODE_BACK) {
            new android.app.AlertDialog.Builder(this)
                    .setIcon(R.drawable.ic_close)
                    .setTitle("Advertencia")
                    .setMessage("¿Realmente desea salir?")
                    .setNegativeButton(android.R.string.cancel, null)
                    .setPositiveButton(android.R.string.ok, new DialogInterface.OnClickListener() {//un listener que al pulsar, cierre la aplicacion
                        @Override
                        public void onClick(DialogInterface dialog, int which) {
                            finish();
                        }
                    })
                    .show();
            return true;
        }
        //para las demas cosas, se reenvia el evento al listener habitual
        return super.onKeyDown(keyCode, event);
    }



    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_consulta__recycler_viewterminal);


        ///y esto para pantalla completa (oculta incluso la barra de estado)
        getWindow().setFlags(WindowManager.LayoutParams.FLAG_FULLSCREEN, WindowManager.LayoutParams.FLAG_FULLSCREEN);

        recyclerView = findViewById(R.id.recyclerView);
        recyclerView.setHasFixedSize(true);
        recyclerView.setLayoutManager(new LinearLayoutManager(this));
        terminalesList = new ArrayList<>();

        loadProductos();

    }


    private void loadProductos() {
        StringRequest stringRequest = new StringRequest(Request.Method.GET, URL,
                new Response.Listener<String>() {
                    @Override
                    public void onResponse(String response) {

                        try {
                            JSONArray array = new JSONArray(response);
                            int totalEncontrados = array.length();
                            Toast.makeText(Consulta_RecyclerViewTerminal.this, "Total: "+totalEncontrados, Toast.LENGTH_SHORT).show();

                            for (int i = 0; i < array.length(); i++) {

                                JSONObject terminalesObject = array.getJSONObject(i);

                                terminalesList.add(new Terminales(
                                        terminalesObject.getInt("idterminal"),
                                        terminalesObject.getString("nombre_terminal")
                                ));
                            }

                            adapter = new TerminalAdapter(Consulta_RecyclerViewTerminal.this, terminalesList);
                            recyclerView.setAdapter(adapter);

                        } catch (JSONException e) {
                            e.printStackTrace();
                        }
                    }
                }, new Response.ErrorListener() {
            @Override
            public void onErrorResponse(VolleyError error) {
                Toast.makeText(Consulta_RecyclerViewTerminal.this, "Error. Compruebe su acceso a Internet.", Toast.LENGTH_SHORT).show();
            }
        });
        //MySingleton.getInstance(Consulta_RecyclerViewTerminal.this).addToRequestQueue(stringRequest);
    }


    private void DialogConfirmacion(){
        String mensaje = "¿Realmente desea salir?";
        dialogo = new AlertDialog.Builder(Consulta_RecyclerViewTerminal.this);
        dialogo.setIcon(R.drawable.ic_close);
        dialogo.setTitle("Advertencia");
        dialogo.setMessage(mensaje);
        dialogo.setCancelable(false);
        dialogo.setPositiveButton("Aceptar", new DialogInterface.OnClickListener() {
            public void onClick(DialogInterface dialogo, int id) {
                finish();
            }
        });
        dialogo.setNegativeButton("Cancelar", new DialogInterface.OnClickListener() {
            public void onClick(DialogInterface dialogo, int id) {
                Toast.makeText(getApplicationContext(), "Operación Cancelada.", Toast.LENGTH_LONG).show();
            }
        });
        dialogo.show();
    }







}
