/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package sistemabaneos;

import java.awt.BorderLayout;
import java.awt.Color;
import java.awt.Dialog;
import java.awt.FlowLayout;
import javax.swing.JDialog;
import javax.swing.JFrame;
import javax.swing.JLabel;
import javax.swing.JPanel;
import static javax.swing.WindowConstants.DISPOSE_ON_CLOSE;

/**
 *
 * @author Jesus David
 */
public class RemoverBaneos extends JDialog {
    public RemoverBaneos(JFrame parent) {
         super(parent,"Remover baneos",Dialog.ModalityType.MODELESS);
        //Inicializamos las caracteristicas default que queremos para
        //este frame
        setSize(1200,800);
        setLocationRelativeTo(null);
       setDefaultCloseOperation(DISPOSE_ON_CLOSE);    
        initComponents();
        setVisible(true);
    }
    private void initComponents(){
        setLayout(new BorderLayout());
        
        //Creamos el JPanel de la izquierda
        JPanel izq=new JPanel(new BorderLayout());
        izq.setBackground(Color.yellow);
        JPanel centro=new JPanel(new BorderLayout());
        JPanel derecha=new JPanel(new BorderLayout());
        JPanel pruebaa=new JPanel(new FlowLayout());
        
        JLabel prueba=new JLabel("Prueba");
        pruebaa.add(prueba);
        pruebaa.add(new JLabel("PRUEBA 22"));
        derecha.add(prueba,BorderLayout.NORTH);
        derecha.add(new JLabel("TAVITO GUAPO jasdkjaskdjaksdakjsdnkjandskandkj"),BorderLayout.CENTER);
        izq.add(pruebaa,BorderLayout.NORTH);
        derecha.setBackground(Color.CYAN);
        centro.add(derecha,BorderLayout.EAST);
        add(izq,BorderLayout.WEST);
        add(centro,BorderLayout.CENTER);
        
        
    }
}
