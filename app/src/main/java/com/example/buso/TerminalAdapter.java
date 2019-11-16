package com.example.buso;

import android.content.Context;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.ImageView;
import android.widget.TextView;

import androidx.recyclerview.widget.RecyclerView;

import com.bumptech.glide.Glide;
import com.example.buso.Entidades.Terminales;

import java.util.List;

//import android.support.v7.widget.RecyclerView;


public class TerminalAdapter extends RecyclerView.Adapter<TerminalAdapter.ProductViewHolder> {


    private Context mCtx;
    private List<Terminales> productList;

    public TerminalAdapter(Context mCtx, List<Terminales> productList) {
        this.mCtx = mCtx;
        this.productList = productList;
    }

    @Override
    public ProductViewHolder onCreateViewHolder(ViewGroup parent, int viewType) {
        LayoutInflater inflater = LayoutInflater.from(mCtx);
        View view = inflater.inflate(R.layout.list_layout, null);
        return new ProductViewHolder(view);
    }

    @Override
    public void onBindViewHolder(ProductViewHolder holder, int position) {
        Terminales product = productList.get(position);

            holder.textViewCodigo1.setText(String.valueOf(product.getIdterminal()));
            holder.textViewDescripcion1.setText(product.getNombre_terminal());


    }

    @Override
    public int getItemCount() {
        return productList.size();
    }

    public static class ProductViewHolder extends RecyclerView.ViewHolder {

        TextView textViewCodigo1, textViewDescripcion1, textViewPrecio1;
        public ProductViewHolder(View itemView) {
            super(itemView);

            textViewCodigo1 = itemView.findViewById(R.id.textViewId1);
            textViewDescripcion1 = itemView.findViewById(R.id.textViewnombre1);
        }
    }


}
