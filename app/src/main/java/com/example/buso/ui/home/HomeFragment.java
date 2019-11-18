package com.example.buso.ui.home;

import android.content.Intent;
import android.os.Bundle;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;
import android.widget.Toast;

import androidx.annotation.Nullable;
import androidx.annotation.NonNull;
import androidx.fragment.app.Fragment;
import androidx.lifecycle.Observer;
import androidx.lifecycle.ViewModelProviders;

import com.example.buso.R;
import com.example.buso.SesionAdmin;
import com.example.buso.WebAdministrador;

public class HomeFragment extends Fragment {

    private HomeViewModel homeViewModel;
    EditText contrasena;

    public View onCreateView(@NonNull LayoutInflater inflater,
                             ViewGroup container, Bundle savedInstanceState) {
        homeViewModel =
                ViewModelProviders.of(this).get(HomeViewModel.class);
        final View root = inflater.inflate(R.layout.fragment_home, container, false);
        //final TextView textView = root.findViewById(R.id.text_home);
        /*homeViewModel.getText().observe(this, new Observer<String>() {
            @Override
            public void onChanged(@Nullable String s) {
                textView.setText(s);
            }
        });*/
        contrasena=root.findViewById(R.id.contra);
        Button btnVerificar = (Button)root.findViewById(R.id.btnVerificar);
        /*btnVerificar.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {

                String contras = (EditText)root.findViewById(R.id.contra).toString();
                String contra = ((EditText)root.findViewById(R.id.contra)).getText().toString();
                if(contra.equals("buso")){
                    Intent i = new Intent(root.SesionAdmin.this, WebAdministrador.class);
                    startActivity(i);
                }else {
                    //Toast.makeText(getApplicationContext(),"La clave ingresada es incorrecta",Toast.LENGTH_SHORT).show();
                    Toast.makeText(getContext(), "La clave", Toast.LENGTH_SHORT).show();
                    contrasena.setText(null);
                }
            }
        });*/
        return root;



    }
}