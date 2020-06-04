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
import java.awt.Font;
import java.awt.GridLayout;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.logging.Level;
import java.util.logging.Logger;
import javax.swing.DefaultListModel;
import javax.swing.ImageIcon;
import javax.swing.JButton;
import javax.swing.JDialog;
import javax.swing.JFrame;
import javax.swing.JLabel;
import javax.swing.JList;
import javax.swing.JPanel;
import javax.swing.JTextArea;
import javax.swing.JTextField;
import javax.swing.SwingConstants;
import static javax.swing.WindowConstants.DISPOSE_ON_CLOSE;
import javax.swing.border.LineBorder;

/**
 *
 * @author Jesus David
 */
public class AplicarBaneos extends JDialog implements ActionListener {
    JList list_motivos;
    JTextField steamid;
    DefaultListModel list_motivos2;
    public AplicarBaneos(JFrame parent) {
         super(parent,"Aplicar baneo",Dialog.ModalityType.MODELESS);
        //Inicializamos las caracteristicas default que queremos para
        //este frame
        setSize(1200,800);
        setLocationRelativeTo(null);
       setDefaultCloseOperation(DISPOSE_ON_CLOSE);    
        initComponents();
        setVisible(true);
    }
    @SuppressWarnings("empty-statement")
    private void initComponents(){
        setLayout(new BorderLayout());
        Color color=new Color(248,249,252);
        Color color2=new Color(129,100,155);
        
        //Se hacen los paneles de la parte superior
        JPanel pnlbanear=new JPanel(new BorderLayout());
        pnlbanear.setBackground(color);
        add(pnlbanear,BorderLayout.NORTH);
        
        //Este panel es para despegar el panel de comando del lado izquiedo
        JPanel izquierda=new JPanel();
        izquierda.setBackground(color);
        JPanel derecha=new JPanel();
        derecha.setBackground(color);
        
        //En este panel se encuentra todos las cosas de la ventana
        JPanel ventana=new JPanel(new BorderLayout());
        ventana.setBackground(color);
        add(ventana,BorderLayout.CENTER);
        
        //Este panel se coloca en la parte superior
        JPanel baja=new JPanel();
        baja.setBackground(color);
        add(baja,BorderLayout.WEST);
        
        //Se crean los 2 fuentes del texto con diferentes tamaños
        Font font=new Font("Helvetica",Font.PLAIN,20);
        JLabel lblbanear=new JLabel("Banear a un jugador de BaluRP");
        lblbanear.setFont(font);
        
        font=new Font("Helvetica",Font.PLAIN,15);
        JLabel lblseleccion=new JLabel("Selecciona el motivo del baneo");
        lblseleccion.setFont(font);
        JLabel lblseleccion2=new JLabel("Para des-seleccionar de clic nuevamente en el motivo");
        lblseleccion2.setFont(font);
        
        //Estis paneles son para agregar lo de banear jugador mas separado del texto siguiente
        pnlbanear.add(baja,BorderLayout.NORTH);
        JPanel izquierdab=new JPanel();
        izquierdab.setBackground(color);
        pnlbanear.add(izquierdab,BorderLayout.WEST);
        pnlbanear.add(lblbanear,BorderLayout.CENTER);
        
        //Aqui se agregan los siguientes 2 textos
        JPanel comando2=new JPanel(new GridLayout(2,1));
        comando2.add(lblseleccion);
        comando2.add(lblseleccion2);
        comando2.setBackground(color);
        ventana.add(izquierda,BorderLayout.WEST);
        JPanel izq=new JPanel();
        izq.setBackground(color);
        JPanel coma=new JPanel(new BorderLayout());
        coma.add(baja,BorderLayout.NORTH);
        coma.add(comando2,BorderLayout.CENTER);
        coma.add(izq,BorderLayout.WEST);
        ventana.add(coma,BorderLayout.NORTH);
        
        //Creamos el panel que va en el centro del panel ventana
        JPanel motivosaplicar=new JPanel (new GridLayout(1,2,20,20));
        motivosaplicar.setBackground(color); //Le asignamos el color
        ventana.add(motivosaplicar,BorderLayout.CENTER);
        ventana.add(derecha,BorderLayout.EAST);
        
        //Se crea el panel de motivos que hira en gridlayout del panel motivosaplicar
        JPanel motivos=new JPanel(new BorderLayout());
        motivos.setBackground(color);//asignamos el color
        JLabel lblmotivo=new JLabel("Motivos de baneo y su duración                   ");
        lblmotivo.setFont(font);
        JPanel pnlmotivo=new JPanel(new FlowLayout());
        pnlmotivo.add(lblmotivo);
        pnlmotivo.setBackground(color);
        JPanel pnlarriba=new JPanel(new BorderLayout());
        pnlarriba.setBackground(color);
        pnlarriba.add(baja,BorderLayout.NORTH);
        pnlarriba.add(pnlmotivo,BorderLayout.CENTER);
        
        //Se agregan los jlabel de la informacion
        
        JLabel nombre;
        ImageIcon image=new ImageIcon(getClass().getResource("/imagenes/motivos.png"));
        
        nombre=new JLabel(image);
        
        //textos.add(nombre);
        
        
        //Se agrega los paneles a motivo
        motivos.add(pnlarriba,BorderLayout.NORTH);
        motivos.add(nombre,BorderLayout.CENTER);
        
        //Se crea el panel de baneos que hira en el gridlayout del panel motivosaplicar
        //Se pone un gridloyaut ya que la seccion de baneos la queremos en el medio.
        JPanel baneos=new JPanel (new BorderLayout());
        baneos.setBackground(color);
        
        JPanel opciones=new JPanel (new BorderLayout());
        opciones.setBackground(color);
        JPanel opciones2=new JPanel(new FlowLayout());
        opciones2.setBackground(color);        
        JPanel baja2=new JPanel();;
        baja2.setBackground(color);
        opciones.add(baja2,BorderLayout.NORTH);
        opciones.add(opciones2,BorderLayout.CENTER);
        
        
        baneos.add(opciones,BorderLayout.NORTH);
        JLabel lblaplicarban=new JLabel("Aplicar ban");
        lblaplicarban.setHorizontalAlignment(SwingConstants.CENTER);
        
        opciones2.add(lblaplicarban);
       
        steamid=new JTextField("SteamID64 del usuario..");
        JPanel division=new JPanel(new GridLayout(1,3));
        division.setBackground(color);
        JPanel pnltext=new JPanel(new BorderLayout());
        pnltext.setBackground(color);
        JPanel pnltext2=new JPanel(new BorderLayout());
        pnltext2.setBackground(color);
        JPanel espacio=new JPanel();
        espacio.setBackground(color);
        pnltext2.add(espacio,BorderLayout.NORTH);
        pnltext2.add(steamid,BorderLayout.CENTER);
        JPanel List=new JPanel(new BorderLayout());
        List.setBackground(color);
        list_motivos=new JList();
        list_motivos.setBorder(new LineBorder(Color.DARK_GRAY));
        list_motivos.setBackground(color);
        List.add(list_motivos,BorderLayout.NORTH);
        JButton aplicarban=new JButton("Aplicar Ban");
        aplicarban.addActionListener(this);
        aplicarban.setBackground(color2);
        aplicarban.setForeground(Color.WHITE);
        JButton limpiar=new JButton("Limpiar");
        limpiar.addActionListener(this);
        Color color3=new Color(133,135,150);
        limpiar.setBackground(color3);
        limpiar.setForeground(Color.WHITE);
        JPanel boton1=new JPanel(new BorderLayout());
        boton1.add(aplicarban,BorderLayout.NORTH);
        JPanel boton2=new JPanel(new BorderLayout());
        JPanel espacio3=new JPanel();
        espacio3.setBackground(color);
        boton2.add(espacio3,BorderLayout.NORTH);
        JPanel centro1=new JPanel(new BorderLayout());
        centro1.setBackground(color);
        centro1.add(limpiar,BorderLayout.NORTH);
        boton2.add(centro1,BorderLayout.CENTER);
        
        boton1.add(boton2,BorderLayout.CENTER);
        JPanel prueba=new JPanel(new BorderLayout());
        JPanel espacio2=new JPanel();
        espacio2.setBackground(color);
        prueba.add(espacio2,BorderLayout.NORTH);
        prueba.add(boton1,BorderLayout.CENTER);
        List.add(prueba,BorderLayout.CENTER);
        pnltext.add(pnltext2,BorderLayout.NORTH);
        pnltext.add(List,BorderLayout.CENTER);
        JPanel izquier=new JPanel();
        izquier.setBackground(color);
        division.add(izquier);
        division.add(pnltext);
        JPanel derec =new JPanel();
        derec.setBackground(color);
        division.add(derec);
        JPanel centro=new JPanel(new BorderLayout());
        baneos.add(centro,BorderLayout.CENTER);
        centro.add(division,BorderLayout.CENTER);
        
        
        //baneos.setBackground(color);
        
        
        //Agregamos los 2 paneles a motivospalicar
        motivosaplicar.add(motivos);
        motivosaplicar.add(baneos);
        
        
        
        createModels();
    }
    @Override
    public void actionPerformed(ActionEvent ae) {
        String comando=ae.getActionCommand();
        int numero;
        String text;
        Baneos usuario;
        if (comando.equals("Aplicar Ban")){
            
            if (!"".equals(list_motivos.getSelectedValue())){
                 numero=Integer.parseInt(steamid.getText());
                 text=steamid.getText();
                if (4==text.length()){
                    usuario=new Baneos(numero,list_motivos.getSelectedValue().toString());
                    usuario.ban();
                    steamid.setText("SteamID64 del usuario");
                }
                else{
                
                }
            }
            else{
               
            }
        }
        if (comando.equals("Limpiar")){
            steamid.setText("SteamID64 del usuario..");
        }
    }

    private void createModels() {
         Connection la_conepcion=null;
        try {
            //Extraemos la informacion de la base de datos para las diferentes carreras.
            //por cada registro de carrera, creamos un objeto de tipo carrera que
            //tendra la informacion de la base de datos.
            //Cada objeto de tipo registro carrera, lo ponemos en el modelo de la lista
            //de carreras
            //Para conectarnos a la base de datos, necesitamos un objeto de tipo
            //java.sql.connection
            //la conexion se la solicitamos a la clase java.sql.DriverManager.
            //Necesitamos especificarle cual base de datos es por medio de un URL de conexion
            la_conepcion=DriverManager.getConnection("jdbc:derby://localhost:1527/ProyectoPOOA","ProyectoPOOA","ProyectoPOOA");
            //Una vez que obtenemos la conexion, necesitamos enviar una instruccion SQL
            //Las instrucciones SQL se manejan con objetos de tipo Statement
            Statement instrupsion=la_conepcion.createStatement();
            //Creamos la cadena de consulta SQL
            String sql="SELECT * FROM PROYECTOPOOA.BANEOS";
            //Un comando sql puede regresar resultados
            //en un objeto ResultSet
            ResultSet resultados=instrupsion.executeQuery(sql);
            //Creamos un modelo para el JList de carrera
            list_motivos2=new DefaultListModel();
            //iteramos en todos los registros que nos dio query
            //para avanzar al siguiente registro usamos next().Inicialmente
            //el resultset esta en una posicion antes del registro inicial
            while(resultados.next()){
                //creamos un bjeto carrera con los datos del registro actual
                //Carrera carrera=new Carrera(resultados.getInt("Carrera_id"),resultados.getString("nombre"));
                //agregamos el objeto al modelo
                Baneos baneo=new Baneos(resultados.getString("motivo"),resultados.getInt("id"));
                list_motivos2.addElement(baneo);
                }
            //ligamos el modelo a su JList correspondiente
            list_motivos.setModel(list_motivos2);
           
        } catch (SQLException ex) {
            Logger.getLogger(AplicarBaneos.class.getName()).log(Level.SEVERE, null, ex);
        }finally{
            if (la_conepcion!=null){
                try {
                    //Cerramos la conexcion a la base de datos
                    la_conepcion.close();
                } catch (SQLException ex) {
                    Logger.getLogger(AplicarBaneos.class.getName()).log(Level.SEVERE, null, ex);
                }
            }
        }
    
    }
    
    }
    

