package com.example.buso;

import androidx.appcompat.app.AppCompatActivity;
import androidx.recyclerview.widget.RecyclerView;

import android.os.Bundle;

import com.example.buso.Entidades.Terminal;

import java.util.List;

public class Recyclerview_terminales extends AppCompatActivity {
    List<Terminal> terminalList;
    RecyclerView rvTerminales;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_recyclerview_terminales);

            rvTerminales = findViewById(R.id.rvTerminales);
    }
}
