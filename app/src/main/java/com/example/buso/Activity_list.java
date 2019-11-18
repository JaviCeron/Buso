package com.example.buso;

import android.os.Bundle;
import android.widget.ArrayAdapter;
import android.widget.ListView;

import androidx.appcompat.app.AppCompatActivity;

import java.util.ArrayList;

public class Activity_list extends AppCompatActivity {
    ListView listaterminal;
    protected void onCreate (Bundle savedInstanceState) {
        super.onCreate ( savedInstanceState);
        setContentView(R.layout.activity_main);



    listaterminal = (ListView) listaterminal.findViewById(R.id.lv133);
    ArrayList lista =new ArrayList();
    lista.add("bus133");
    lista.add("bus302");
    lista.add("bus512");

    /*ArrayAdapter adaptador = new ArrayAdapter(this,android.R.layout.simple_list_item_1, lista);
    ArrayAdapter<CharSequence> adapter =ArrayAdapter.createFromResource(this, R.array.Lista, android.R.layout.simple_list_item_1);

    listaterminal.setAdapter(adaptador);
}


    }*/
}
}