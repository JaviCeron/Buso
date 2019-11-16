package com.example.buso;

import android.content.Context;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.ImageView;
import android.widget.TextView;

import androidx.recyclerview.widget.RecyclerView;

import com.example.buso.Entidades.Terminales;

import java.util.List;

//import android.support.v7.widget.RecyclerView;


public class TerminalAdapter extends RecyclerView.Adapter<TerminalAdapter.ProductViewHolder> {


    private Context mCtx;
    private List<Terminales> terminaList;

    public TerminalAdapter(Context mCtx, List<Terminales> terminalList) {
        this.mCtx = mCtx;
        this.terminaList = terminalList;
    }

    @Override
    public ProductViewHolder onCreateViewHolder(ViewGroup parent, int viewType) {
        LayoutInflater inflater = LayoutInflater.from(mCtx);
        View view = inflater.inflate(R.layout.list_layout, null);
        return new ProductViewHolder(view);
    }

    @Override
    public void onBindViewHolder(ProductViewHolder holder, int position) {
        Terminales terminal = terminaList.get(position);

        //loading the image

        //String im = product.getImagen();
        //Toast.makeText(mCtx, ""+im, Toast.LENGTH_SHORT).show();


        //if(im.isEmpty()) {
          //  holder.imageView.setImageResource(R.drawable.imgnoencontrada);
            holder.textViewCodigo1.setText(String.valueOf(terminal.getIdterminal()));
            holder.textViewDescripcion1.setText(terminal.getNombre());
            /*holder.textViewPrecio1.setText(String.valueOf(product.getPrecio()));

        }else{
            Glide.with(mCtx)
                    .load(product.getImagen())
                    .into(holder.imageView);

            holder.textViewCodigo1.setText(String.valueOf(product.getIdterminal()));
            holder.textViewDescripcion1.setText(product.getNombre());
            holder.textViewPrecio1.setText(String.valueOf(product.getPrecio()));
        }*/

    }

    @Override
    public int getItemCount() {
        return terminaList.size();
    }

    public static class ProductViewHolder extends RecyclerView.ViewHolder {

        TextView textViewCodigo1, textViewDescripcion1, textViewPrecio1;
        ImageView imageView;

        public ProductViewHolder(View itemView) {
            super(itemView);

            textViewCodigo1 = itemView.findViewById(R.id.textViewCodigo1);
            textViewDescripcion1 = itemView.findViewById(R.id.textViewDescripcion1);
           // textViewPrecio1= itemView.findViewById(R.id.textViewPrecio1);
            //imageView = itemView.findViewById(R.id.imageView);
        }
    }


}
