package com.example.myapplication

import androidx.appcompat.app.AppCompatActivity
import android.os.Bundle
import android.widget.Button
import android.widget.EditText


class htnilai : AppCompatActivity() {

    private lateinit var nilait: EditText
    private lateinit var nilaiuts: EditText
    private lateinit var nilaiuas: EditText
    private lateinit var namamhs: EditText
    private lateinit var hasilnama: EditText
    private lateinit var totalnilai: EditText
    private lateinit var nilaihuruf: EditText
    private lateinit var hitung: Button
    private lateinit var kembali: Button

    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_htnilai)

        nilait= findViewById(R.id.edittugas)
        nilaiuts= findViewById(R.id.edituts)
        nilaiuas= findViewById(R.id.editTuas)
        namamhs= findViewById(R.id.editnama)
        hasilnama= findViewById(R.id.editmahasiswa)
        totalnilai= findViewById(R.id.edittotalnilai)
        nilaihuruf= findViewById(R.id.editnilaihuruf)
        hitung= findViewById(R.id.hitung)
        kembali= findViewById(R.id.kembali)

        hitung.setOnClickListener{
            val nt = nilait.text.toString()
            val nuts = nilaiuts.text.toString()
            val uas = nilaiuas.text.toString()

            val nilaitotal = (nt.toFloat() + nuts.toFloat() + uas.toFloat()) / 3
            if (nilaitotal <= 100 && nilaitotal >= 85) {
                nilaihuruf.setText("A")
            } else if (nilaitotal < 85 && nilaitotal >= 70) {
                nilaihuruf.setText("B")
            } else if (nilaitotal < 70 && nilaitotal >= 56) {
                nilaihuruf.setText("C")
            }  else if (nilaitotal < 55 && nilaitotal >= 0) {
                nilaihuruf.setText("D")
            }

            hasilnama.setText(namamhs.text.toString()) // Fix this line
            totalnilai.setText(nilaitotal.toString())
        }

    }
}