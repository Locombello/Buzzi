package com.example.secondgradeequation;

import androidx.appcompat.app.AppCompatActivity;
import android.os.Bundle;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;

public class MainActivity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        Button reset = findViewById(R.id.reset);
        Button calculate = findViewById(R.id.calculate);
        TextView result = findViewById(R.id.result);
        EditText a = findViewById(R.id.a);
        EditText b = findViewById(R.id.b);
        EditText c = findViewById(R.id.c);

        reset.setOnClickListener(view -> {
            a.setText("");
            b.setText("");
            c.setText("");
            result.setText("");
        });
    }
}