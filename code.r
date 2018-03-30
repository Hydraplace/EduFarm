setwd("/Applications/MAMP/htdocs/EduFarm")
wine_df=read.csv("/Applications/MAMP/htdocs/EduFarm/dataset.csv",sep = ',',header = FALSE);
mydata<-wine_df;
mydata$V5<-factor(mydata$V4);
mydata$out<-relevel(mydata$V5,ref="1");
library(nnet);
mymodel<-multinom(out~V1+V2+V3,data=mydata);
mydata2<-read.csv("/Applications/MAMP/htdocs/EduFarm/demo.csv",sep = ',',header = FALSE);
x<-predict(mymodel,mydata2);
write.table(x, file="test.txt", quote=F, row.names = FALSE, col.names = FALSE);
x

