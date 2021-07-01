
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
  if(isset($_POST["error"]))
     $error=$_POST["error"]; 
     else
     $error="";   
     
     
     switch($error){
         case "1":
             $str="Flow Switch Error<br>Please Check the Water Pump";
                    break;  
                    case "2":
                  $str= "Water Flow Error<br>The Chilled Water Temperature Is low<br>
                  Please Check The Water Pump";     
                        break;
                       case "3":
                         $str="Inlet Water Temperature Sensor Error<br>The Sensor Is Short Circuit Or Break<br>
                         Please Check The Inlet Water Sensor";  
                           break;
                           
                           case "4":
                           $str="Outlet Water Temperature Sensor Error<br>The Sensor Is Short Circuit Or Break<br>
                           Please Check The Outlet Water Sensor";    
                               break;
                               
                               case "5":
                            $str="HECH1 Body Temperature Sensor Error<br>The Sensor Is Short Circuit Or Break<br>
                            Please Check The HECH1 Body Sensor" ;      
                                   break;
                                   
                                   case "6":
                                 $str="Phase 1 Current Sensor Error<br>Chiller Take High Current In Phase 1<br>
                                 Please Check The Condenser & Fan" ;     
                                       break;
                                       
                                       case "7":
                                     $str="Phase 2 Current Sensor Error<br>Chiller Take High Current In Phase 2<br>
                                     Please Check The Condenser & Fan" ;     
                                           break;
                                           
                                           case "8":
                                        $str= "Phase 3 Current Sensor Error<br>Chiller Take High Current In Phase 3<br>
                                        Please Check The Condenser & Fan" ;     
                                               break;
                                               
                                               case "9":
                                           $str="Current Unbalancing Error<br>Some Phases Have Unusual Consumption<br>
                                           Please Check The Power Usage";        
                                                   break;
                                                   
                                          case "10":
                                            $str="Water Flow Error<br>Inlet & Outlet And HECB Temperature<br>
                                            Difference Is More Than 10 Degree";  
                                              break;
                                              
                                              case "11":
                                              $str="Compressor 1 Suction Pressure Error<br>Please Check The Amount Of Refrigerant" ;   
                                                  break;
                                                  
                                                  case "12":
                                                  $str="Compressor 1 Discharge Pressure Error<br>Please Check The Condenser And Fan<br>
                                                  And Also Ambient Temperature";    
                                                      break;
                                                      
                                                      case "13":
                                                      $str="Compressor 2 Suction Pressure Error<br>Please Check The Amount Of Refrigerant<br> "; 
                                              
                                                          break;
                                                          
                                                          case "14":
                                                         $str="Compressor 2 Discharge Pressure Error<br>Please Check The Condenser And Fan<br>
                                                         And Also Ambient Temperature";     
                                                              break;
                                                              
                                                              case "15":
                                                             $str="Compressor 3 Suction Pressure Error<br>Please Check The Amount Of Refrigerant" ;    
                                                                  break;
                                                                  
                                                                  case "16":
                                                            $str="Compressor 3 Discharge Pressure Error<br>Please Check The Condenser And Fan<br>
                                                            And Also Ambient Temperature";          
                                                                      break;
                                                                    
                                                                    case "17":
                                                                    $str="Compressor 4 Suction Pressure Error<br>Please Check The Amount Of Refrigerant" ;   
                                                                        break;
                                                                        
                                                                        case "18":
                                                                            
                                                                            break;
         
     }
     
     echo "E:".$error.'<br>'.$str;
    
}


?>

void show_error() {
        if (Vars.error > 0 && Vars.error < 90) {
            txt_header1.setText(String.format("E : %d",Vars.error));
            switch (Vars.error) {

             
               
                case 18:
                    txt_header2.setText(String.format("Compressor 4 Discharge Pressure Error"));
                    txt_header3.setText(String.format("Please Check The Condenser And Fan\n\n" +
                            "And Also Ambient Temperature"));
                    break;
                case 19:
                    txt_header2.setText(String.format("Compressor 5 Suction Pressure Error"));
                    txt_header3.setText(String.format("Please Check The Amount Of Refrigerant\n\n" +
                            ""));
                    break;
                case 20:
                    txt_header2.setText(String.format("Compressor 5 Discharge Pressure Error"));
                    txt_header3.setText(String.format("Please Check The Condenser And Fan\n\n" +
                            "And Also Ambient Temperature"));
                    break;
                case 21:
                    txt_header2.setText(String.format("Compressor 6 Suction Pressure Error"));
                    txt_header3.setText(String.format("Please Check The Amount Of Refrigerant\n\n" +
                            ""));
                    break;
                case 22:
                    txt_header2.setText(String.format("Compressor 6 Discharge Pressure Error"));
                    txt_header3.setText(String.format("Please Check The Condenser And Fan\n\n" +
                            "And Also Ambient Temperature"));
                    break;
                case 23:
                    txt_header2.setText(String.format("Ambient Temperature Sensor Error"));
                    txt_header3.setText(String.format("The Sensor Is Short Circuit Or Break\n\n" +
                            "Please Check The Ambient Temp Sensor"));
                    break;
                case 24:
                    txt_header2.setText(String.format("a"));
                    txt_header3.setText(String.format("The Sensor Is Short Circuit Or Break\n\n" +
                            "Please Check The Comp1 Suction Sensor"));
                    break;
                case 25:
                    txt_header2.setText(String.format("Comp1 Discharge Temp. Sensor Error"));
                    txt_header3.setText(String.format("The Sensor Is Short Circuit Or Break\n\n" +
                            "Please Check The Comp1 Discharge Sensor"));
                    break;
                case 26:
                    txt_header2.setText(String.format("Comp2 Suction Temperature Sensor Error"));
                    txt_header3.setText(String.format("The Sensor Is Short Circuit Or Break\n\n" +
                            "Please Check The Comp2 Suction Sensor"));
                    break;
                case 27:
                    txt_header2.setText(String.format("Comp2 Discharge Temp. Sensor Error"));
                    txt_header3.setText(String.format("The Sensor Is Short Circuit Or Break\n\n" +
                            "Please Check The Comp2 Discharge Sensor"));
                    break;
                case 28:
                    txt_header2.setText(String.format("Comp3 Suction Temperature Sensor Error"));
                    txt_header3.setText(String.format("The Sensor Is Short Circuit Or Break\n\n" +
                            "Please Check The Comp3 Suction Sensor"));
                    break;
                case 29:
                    txt_header2.setText(String.format("Comp3 Discharge Temp. Sensor Error"));
                    txt_header3.setText(String.format("The Sensor Is Short Circuit Or Break\n\n" +
                            "Please Check The Comp3 Discharge Sensor"));
                    break;
                case 30:
                    txt_header2.setText(String.format("Comp4 Suction Temperature Sensor Error"));
                    txt_header3.setText(String.format("The Sensor Is Short Circuit Or Break\n\n" +
                            "Please Check The Comp4 Suction Sensor"));
                    break;
                case 31:
                    txt_header2.setText(String.format("Phase Control Error"));
                    txt_header3.setText(String.format("Phase Sequence Is Wrong\n\n" +
                            "Please Check The Input Power"));
                    break;

                case 37:
                    txt_header2.setText(String.format("      Comp1 Current Error"));
                    txt_header3.setText(String.format("  Comp1 Current is high than limited\n\n" +
                            "Please Check The Condenser And Fan"));
                    break;
                case 39:
                    txt_header2.setText(String.format("      Comp2 Current Error"));
                    txt_header3.setText(String.format("  Comp2 Current is high than limited\n\n" +
                            "Please Check The Condenser And Fan"));
                    break;
                case 41:
                    txt_header2.setText(String.format("      Comp3 Current Error"));
                    txt_header3.setText(String.format("  Comp3 Current is high than limited\n\n" +
                            "Please Check The Condenser And Fan"));
                    break;
                case 43:
                    txt_header2.setText(String.format("      Comp4 Current Error"));
                    txt_header3.setText(String.format("  Comp4 Current is high than limited\n\n" +
                            "Please Check The Condenser And Fan"));
                    break;

                case 49:
                    txt_header2.setText(String.format("    Water Pump Current Error"));
                    txt_header3.setText(String.format("  Pump Current is high than limited\n\n" +
                            "   Please Check The Water Pump"));
                    break;
                case 51:
                    txt_header2.setText(String.format("       Fan Current Error"));
                    txt_header3.setText(String.format("   Fan Current is high than limited\n\n" +
                            "  Please Check The Condenser Fan"));
                    break;
                case 53:
                    txt_header2.setText(String.format("Comp1 Suction Temperature Error"));
                    txt_header3.setText(String.format("Comp1 Suction Temp. is less than -15\n\n" +
                            "Please Check The Evaporator"));
                    break;
                case 54:
                    txt_header2.setText(String.format("Comp2 Suction Temperature Error"));
                    txt_header3.setText(String.format("Comp2 Suction Temp. is less than -15\n\n" +
                            "Please Check The Evaporator"));
                    break;
                case 55:
                    txt_header2.setText(String.format("Comp3 Suction Temperature Error"));
                    txt_header3.setText(String.format("Comp3 Suction Temp. is less than -15\n\n" +
                            "Please Check The Evaporator"));
                    break;

                case 56:
                    txt_header2.setText(String.format("Comp4 Suction Temperature Error"));
                    txt_header3.setText(String.format("Comp4 Suction Temp. is less than -15\n\n" +
                            "Please Check The Evaporator"));
                    break;
                case 57:
                    txt_header2.setText(String.format("Comp1 Discharge Temperature Error"));
                    txt_header3.setText(String.format("Comp1 Discharge Temp. is higher than 130\n\n" +
                            "Please Check The Condenser And Fan"));
                    break;
                case 58:
                    txt_header2.setText(String.format("Comp2 Discharge Temperature Error"));
                    txt_header3.setText(String.format("Comp2 Discharge Temp. is higher than 130\n\n" +
                            "Please Check The Condenser And Fan"));
                    break;
                case 59:
                    txt_header2.setText(String.format("Comp3 Discharge Temperature Error"));
                    txt_header3.setText(String.format("Comp3 Discharge Temp. is higher than 130\n\n" +
                            "Please Check The Condenser And Fan"));
                    break;
                case 60:
                    txt_header2.setText(String.format("Communication Error"));
                    txt_header3.setText(String.format("Please Check the Communication Cable\n\n" +
                            ""));
                    break;
                case 61:
                    txt_header2.setText(String.format("Power Failure Error"));
                    txt_header3.setText(String.format("Please Wait To Power Stable\n\n" +
                            ""));
                    break;
                case 62:
                    txt_header2.setText(String.format("Watchdog timer overflow"));
                    txt_header3.setText(String.format("Micro was reset by Watchdog\n\n" +
                            ""));
                    break;
                case 63:
                    txt_header2.setText(String.format("Comp4 Discharge Temp. Sensor Error"));
                    txt_header3.setText(String.format("The Sensor Is Short Circuit Or Break\n\n" +
                            "Please Check The Comp4 Discharge Sensor"));
                    break;
                case 64:
                    txt_header2.setText(String.format("Comp1 Liquid line Temp. Sensor Error"));
                    txt_header3.setText(String.format("The Sensor Is Short Circuit Or Break\n\n" +
                            "Please Check The Comp1 Liquid Sensor"));
                    break;
                case 65:
                    txt_header2.setText(String.format("Comp2 Liquid line Temp. Sensor Error"));
                    txt_header3.setText(String.format("The Sensor Is Short Circuit Or Break\n\n" +
                            "Please Check The Comp2 Liquid Sensor"));
                    break;
                case 66:
                    txt_header2.setText(String.format("Comp3 Liquid line Temp. Sensor Error"));
                    txt_header3.setText(String.format("The Sensor Is Short Circuit Or Break\n\n" +
                            "Please Check The Comp3 Liquid Sensor"));
                    break;
                case 67:
                    txt_header2.setText(String.format("Comp4 Liquid line Temp. Sensor Error"));
                    txt_header3.setText(String.format("The Sensor Is Short Circuit Or Break\n\n" +
                            "Please Check The Comp4 Liquid Sensor"));
                    break;
                case 68:
                    txt_header2.setText(String.format("Comp1 EEV Outlet Temp. Sensor Error"));
                    txt_header3.setText(String.format("The Sensor Is Short Circuit Or Break\n\n" +
                            "Please Check The Comp1 EEV Temp Sensor"));
                    break;
                case 69:
                    txt_header2.setText(String.format("Comp2 EEV Outlet Temp. Sensor Error"));
                    txt_header3.setText(String.format("The Sensor Is Short Circuit Or Break\n\n" +
                            "Please Check The Comp2 EEV Temp Sensor"));
                    break;
                case 70:
                    txt_header2.setText(String.format("Comp3 EEV Outlet Temp. Sensor Error"));
                    txt_header3.setText(String.format("The Sensor Is Short Circuit Or Break\n\n" +
                            "Please Check The Comp3 EEV Temp Sensor"));
                    break;
                case 71:
                    txt_header2.setText(String.format("Comp4 EEV Outlet Temp. Sensor Error"));
                    txt_header3.setText(String.format("The Sensor Is Short Circuit Or Break\n\n" +
                            "Please Check The Comp4 EEV Temp Sensor"));
                    break;
                case 72:
                    txt_header2.setText(String.format(" Electrical Box Temp. Sensor Error"));
                    txt_header3.setText(String.format("The Sensor Is Short Circuit Or Break\n\n" +
                            "Please Check The Comp4 EEV Temp Sensor\n Please Check The This Temp Sensor"));
                    break;
                case 73:
                    txt_header2.setText(String.format(" HECH2 Body Temperature Sensor Error"));
                    txt_header3.setText(String.format("The Sensor Is Short Circuit Or Break\n\n" +
                            "Please Check The HECH2 Body Sensor"));
                    break;
                case 74:
                    txt_header2.setText(String.format("Comp4 Discharge Temperature Error"));
                    txt_header3.setText(String.format("Comp4 Discharge Temp. is higher than 130\n\n" +
                            "Please Check The Condenser And Fan"));
                    break;
                case 75:
                    txt_header2.setText(String.format("Comp1 Running Error"));
                    txt_header3.setText(String.format("  Discharge & Suction Temperature\n\n" +
                            "Difference Is less Than 40 Degree"));
                    break;
                case 76:
                    txt_header2.setText(String.format("Comp2 Running Error"));
                    txt_header3.setText(String.format("  Discharge & Suction Temperature\n\n" +
                            "Difference Is less Than 40 Degree"));
                    break;
                case 77:
                    txt_header2.setText(String.format("Comp3 Running Error"));
                    txt_header3.setText(String.format("  Discharge & Suction Temperature\n\n" +
                            "Difference Is less Than 40 Degree"));
                    break;
                case 78:
                    txt_header2.setText(String.format("Comp4 Running Error"));
                    txt_header3.setText(String.format("  Discharge & Suction Temperature\n\n" +
                            "Difference Is less Than 40 Degree"));
                    break;
                case 79:
                    txt_header2.setText(String.format("Water Flow Error"));
                    txt_header3.setText(String.format("Inlet & Outlet And HECB1 Temperature\n\n" +
                            "Difference Is More Than 10 Degree"));
                    break;
                case 80:
                    txt_header2.setText(String.format("Water Flow Error"));
                    txt_header3.setText(String.format("Inlet & Outlet And HECB2 Temperature\n\n" +
                            "Difference Is More Than 10 Degree"));
                    break;

            }
        }
    }