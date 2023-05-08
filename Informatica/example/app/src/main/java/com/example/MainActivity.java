package com.example;

import androidx.appcompat.app.AppCompatActivity;
import android.os.Bundle;
import android.widget.TextView;
import android.widget.Button;

public class MainActivity extends AppCompatActivity {

    private int count = 0;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        Button counter = findViewById(R.id.counter);
        Button reset = findViewById(R.id.reset);
        TextView label = findViewById(R.id.label);

        counter.setOnClickListener(view -> label.setText(getString(R.string.label, ++count)));
        reset.setOnClickListener(view -> {
            label.setText("");
            count = 0;
        });
    }
}