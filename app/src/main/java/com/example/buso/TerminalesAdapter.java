package com.example.buso;

import android.view.View;
import android.view.ViewGroup;

import androidx.annotation.NonNull;
import androidx.recyclerview.widget.RecyclerView;

public class TerminalesAdapter extends RecyclerView.Adapter<TerminalesAdapter.ProductViewHolder> {
    @NonNull
    @Override
    public ProductViewHolder onCreateViewHolder(@NonNull ViewGroup parent, int viewType) {
        return null;
    }

    @Override
    public void onBindViewHolder(@NonNull ProductViewHolder holder, int position) {

    }

    @Override
    public int getItemCount() {
        return 0;
    }

    public class ProductViewHolder extends RecyclerView.ViewHolder {
        public ProductViewHolder(@NonNull View itemView) {
            super(itemView);
        }
    }
}
