package com.example.buso;

import androidx.appcompat.app.AppCompatActivity;
import androidx.recyclerview.widget.LinearLayoutManager;
import androidx.recyclerview.widget.RecyclerView;

import android.content.DialogInterface;
import android.os.Bundle;
import android.view.KeyEvent;
import android.widget.Toast;

import com.android.volley.Request;
import com.android.volley.Response;
import com.android.volley.toolbox.StringRequest;
import com.example.buso.Entidades.Terminal;

import org.json.JSONArray;
import org.json.JSONObject;

import java.sql.Array;
import java.util.ArrayList;
import java.util.List;

import static android.provider.ContactsContract.CommonDataKinds.Website.URL;

public class Recyclerview_terminales extends AppCompatActivity {
    List<Terminal> terminalList;
    RecyclerView rvTerminales;
    TerminalesAdapter adapter;

    @Override
    public boolean onKeyDown(int keyCode, KeyEvent event) {
        if (keyCode == KeyEvent.KEYCODE_BACK) {
            new android.app.AlertDialog.Builder(this)
                    .setIcon(R.drawable.ic_close)
                    .setTitle("Buso")
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
        setContentView(R.layout.activity_recyclerview_terminales);

            rvTerminales = findViewById(R.id.rvTerminales);
        rvTerminales.setHasFixedSize(true);
        rvTerminales.setLayoutManager(new LinearLayoutManager(this));
        terminalList = new ArrayList<>();

        loadTerminales();
    }

    public void loadTerminales() {
        StringRequest stringRequest = new StringRequest(Request.Method.GET, URL, new Response.Listener<String>() {
            @Override
            public void onResponse(String response) {
                Toast.makeText(Recyclerview_terminales.this, ""+response, Toast.LENGTH_SHORT).show();
                try {
                    JSONObject jsonObject = new JSONObject(response);
                    JSONArray jsonArray = new JSONArray("terminal");
                    for (int i = 0; i< jsonArray.length(); i++){
                        JSONObject terminalObject1 = jsonArray.getJSONObject(i);

                        //String nombre = terminalObject1.getString("nombre");
                        String terminal_salida = terminalObject1.getString("terminal_salida");
                        Terminal objeto =new Terminal(terminal_salida);
                        terminalList.add(objeto);

                        terminalList.add(new Terminal(
                            terminalObject1.getString("terminal_salida");
                        ));
                    }
                        adapter
                } catch (Exception e) {
                    e.printStackTrace();
                }
            }
        });
    }
}
