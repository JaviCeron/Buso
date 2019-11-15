package com.example.buso;

import android.content.Context;
import android.view.View;
import android.view.ViewGroup;

import androidx.annotation.NonNull;
import androidx.recyclerview.widget.RecyclerView;

import com.example.buso.Entidades.Terminal;

import java.util.List;

public class TerminalesAdapter extends RecyclerView.Adapter<TerminalesAdapter.ProductViewHolder> {
    private Context context;
    private List<Terminal> terminalList;

    public TerminalesAdapter(Context context, List<Terminal> terminalList) {
        this.context = context;
        this.terminalList = terminalList;
    }

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
