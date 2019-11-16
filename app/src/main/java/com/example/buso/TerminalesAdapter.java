package com.example.buso;

import android.content.Context;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.TextView;

import androidx.annotation.NonNull;
import androidx.recyclerview.widget.RecyclerView;

import com.bumptech.glide.Glide;
import com.example.buso.Entidades.Terminal;

import java.util.List;

public class TerminalesAdapter extends RecyclerView.Adapter<TerminalesAdapter.TerminalViewHolder> {
    private Context context;
    private List<Terminal> terminalList;

    public TerminalesAdapter(Context context, List<Terminal> terminalList) {
        this.context = context;
        this.terminalList = terminalList;
    }

    @NonNull
    @Override
    public TerminalViewHolder onCreateViewHolder(@NonNull ViewGroup parent, int viewType) {
        LayoutInflater inflater =LayoutInflater.from(context);
        View view = inflater.inflate(R.layout.rv_lista_terminales, null);
        return new TerminalViewHolder(view);
    }

    @Override
    public void onBindViewHolder(@NonNull TerminalViewHolder holder, int position) {
    Terminal terminal =terminalList.get(position);

    String ts = terminal.getNombreTerminal();
    if (ts.isEmpty()){
        holder.tvNombreTerminal.setText(String.valueOf(terminal.getNombreTerminal()));
    }else {
        holder.tvNombreTerminal.setText(String.valueOf(terminal.getNombreTerminal()));
    }
    }

    @Override
    public int getItemCount() {
        return 0;
    }

    public class TerminalViewHolder extends RecyclerView.ViewHolder {
        TextView tvNombreTerminal;

        public TerminalViewHolder(@NonNull View itemView) {
            super(itemView);


            tvNombreTerminal =itemView.findViewById(R.id.tvNombreTerminal);

        }
    }
}
